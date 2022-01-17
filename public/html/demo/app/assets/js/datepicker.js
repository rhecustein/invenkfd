/*
| ------------------------------------------------------------------------------
| Moment extension (rough draft)
| ------------------------------------------------------------------------------
*/

(function(moment){
  
    var startOf = moment.prototype.startOf,
        aliases = {
          'mi': 'millennium',
          'millennium': 'millennium',
          'millennia': 'millennium',
          'ce': 'century',
          'century': 'century',
          'centuries': 'century',
          'de': 'decade',
          'decade': 'decade',
          'decades': 'decade',
        },
        normalizeUnits = function (units) {
          return typeof units === 'string' ? 
            aliases[units] || aliases[units.toLowerCase()] : 
            undefined;
        };
    
    moment.prototype.startOf = function (units) {
      var prevUnits = units;
      units = normalizeUnits(units);
      if (! units) {
        return startOf.call(this, prevUnits);
      } else {
        switch (units) {
          case 'millennium':
            this.year(Math.floor(this.year() / 1000) * 1000);
          case 'century':
            this.year(Math.floor(this.year() / 100) * 100);
          case 'decade':
            this.year(Math.floor(this.year() / 10) * 10);
        }
      }
      return this.startOf('year');
    }
    
  })(moment);
  
  /*
  | ------------------------------------------------------------------------------
  | Calendar plugin (rough draft)
  | ------------------------------------------------------------------------------
  */
  
  (function($, moment){
    
    var NAME      = 'datepicker',
        NAMESPACE = 'bs.' + NAME,
        TOGGLE    = 'data-toggle="datepicker"',
        APIKEY    = NAMESPACE + '.data-api',
        CLICK     = 'click.' + APIKEY,
        FOCUS     = 'focus.' + APIKEY,
        BLUR      = 'blur.' + APIKEY;
    
    var views = ['time', 'day', 'month', 'year', 'decade', 'century'];
    
    var Datepicker= function (elem, options) {
      this.elem = elem;
      this.options = options;
      this.init();
    };
    
    Datepicker.DEFAULTS = {
      autoclose: true,
      datetime: undefined,
      format: 'MM/DD/YYYY',
      minView: 'month',
      maxView: 'year',
      view: 'month',
    };
    
    Datepicker.VIEWS = [
      'day',    // Time select
      'month',  // Day select
      'year',   // Month select
      'decade', // Year select (10x)
      'century' // Decade select (10x)
    ];
    
    Datepicker.VIEW_ALIAS = {
      'day':      0, 'time':    0,
      'month':    1, 'days':    1,
      'year':     2, 'months':  2,
      'decade':   3, 'years':   3,
      'century':  4, 'decades': 4
    };
    
    Datepicker.prototype.init = function () {
      var $elem = $(this.elem),
          $body = $elem.find('.datepicker-body');
      if ($body.length > 0) {
        this.body = $body[0];
      } else {
        this.body = $elem[0];
      }
      this.render();
    }
    
    Datepicker.prototype.render = function () {
      
      var view = this.options.view,
          datetime = moment(),
          $body = $(this.body),
          html = '';
      
      if (view == 'time') {
        $body.append('Hello time world!!');
      } else {
        
        var now = moment(),
            today,
            month
        
        var stepType, 
            stepAmount, 
            format,
            rowCount = 6,
            colCount = 7,
            i;
        
        if (view == 'century') { // 2000 - 2099
          datetime.year((Math.floor(datetime.year()/100)*100)-10);
          stepType = 'year';
          stepAmount = 10;
          format = 'YYYY';
          rowCount = 3;
          colCount = 4;
        } else if (view == 'decade') { // 2010 - 2019
          // First year will be out-of-bounds
          // Last year will be out-of-bounds
          datetime.year((parseInt(datetime.year()/10,10)*10)-1);
          stepType = 'year';
          stepAmount = 1;
          format = 'YYYY';
          rowCount = 3;
          colCount = 4;
        } else if (view == 'year') { // Jan - Dec
          datetime.startOf('year');
          stepType = 'month';
          stepAmount = 1;
          format = 'MMM';
          rowCount = 3;
          colCount = 4;
        } else { // 1 - 31
          // 0-6 days will be out-of-bounds in week 1
          // 0-7 days will be out-of-bounds in week 5
          // 0-7 days will be out-of-bounds in week 6
          datetime.startOf('month').startOf('week');
          stepType = 'day';
          stepAmount = 1;
          format = 'D';
          rowCount = 6;
          colCount = 7;
        }
        
        html += '<table class="table table-bordered table-condensed datepicker-table">';
        if (view == 'month') {
          html += '<thead>' +
                  '<tr>' +
                  '<th>Su</th>' +
                  '<th>Mo</th>' +
                  '<th>Tu</th>' +
                  '<th>We</th>' +
                  '<th>Th</th>' +
                  '<th>Fr</th>' +
                  '<th>Sa</th>' +
                  '</tr>' +
                  '<thead>';
        }
        html += '<tbody>';
        for (x = 0; x < rowCount; x++) {
          html += '<tr>';
          for (y = 0; y < colCount; y++) {
            html += '<td>';
            html += datetime.format(format);
            html += '</td>';
            datetime.add(stepAmount, stepType);
          }
          html += '</tr>';
        }
        html += '</tbody>';
        html += '</table>';
        $body[0].innerHTML = html;
        
      }
      
    }
  
    function Plugin(option) {
      return this.each(function () {
        
        var $this = $(this),
            data  = $this.data(NAMESPACE),
            options = typeof option == 'object' && option;
        
        if (! data) {
          options = $.extend({}, Datepicker.DEFAULTS, $this.data(), options);
          data = new Datepicker(this, options);
          $this.data(NAMESPACE, data);
        }
        
      });
    };
  
    var noConflict = $.fn.datepicker;
  
    $.fn.datepicker             = Plugin;
    $.fn.datepicker.Constructor = Datepicker;
  
    $.fn.datepicker.noConflict = function () {
      $.fn.datepicker = noConflict;
      return this;
    };
  
    // Data-API.
    function clickHandler (e) {
      var $this = $(this),
          data = $this.data(NAMESPACE);
      console.log('something!!!');
      if (data) {
      }
    }
    
    $(document)
      .on(CLICK, '[data-toggle="datepicker"]', clickHandler);
    
  })(jQuery, moment);
  
  /*
  | ------------------------------------------------------------------------------
  | Installation
  | ------------------------------------------------------------------------------
  */
  
  $(function () {
    $('.datepicker').datepicker()
  });