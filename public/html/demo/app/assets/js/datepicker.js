let days = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
  ];
  let months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  ];
  
  let years = [
    "2014",
    "2015",
    "2016",
    "2017",
    "2018",
    "2019",
    "2020",
    "2021",
    "2022",
    "2023",
  ];
  
  $(function() {
    for (let i = 0; i < years.length; i++) {
      $(".years").append(
        "<div class='yearSelector' id='" + years[i] + "'>" + years[i] + "</div>"
      );
    }
    fillCalendar();
  
    $(".months").bind("mousewheel", function(e) {
      // scrolling up
      if (e.originalEvent.wheelDelta / 120 > 0) {
        if ($(this).scrollTop() == 0)
          $(".monthSelector")
            .last()
            .prependTo(".months");
      } else {
        if (
          $(e.target).scrollTop() + $(e.target).innerHeight() >=
          $(e.target)[0].scrollHeight
        ) {
          $(".monthSelector")
            .first()
            .appendTo(".months");
        }
      }
      return false;
    });
  
    $(".years").bind("mousewheel", function(e) {
      // scrolling up
      if (e.originalEvent.wheelDelta / 120 > 0) {
        if ($(this).scrollTop() == 0) {
          $(".yearSelector")
            .last()
            .remove();
          let year =
            parseInt(
              $(".yearSelector")
                .first()
                .html()
            ) - 1;
          let yearDiv =
            "<div class='yearSelector' id='" + year + "'>" + year + "</div>";
          $(".years").prepend(yearDiv);
        }
      } else {
        if (
          $(e.target).scrollTop() + $(e.target).innerHeight() >=
          $(e.target)[0].scrollHeight
        ) {
          $(".yearSelector")
            .first()
            .remove();
          let year =
            parseInt(
              $(".yearSelector")
                .last()
                .html()
            ) + 1;
          let yearDiv =
            "<div class='yearSelector' id='" + year + "'>" + year + "</div>";
          $(".years").append(yearDiv);
        }
      }
      return false;
    });
  });
  
  $(".date-time").on("focus", function(e) {
    $(".date-time-picker").addClass("focus");
  });
  $(".date-time").on("blur", function(e) {
    // console.log("lala")
    // $(".date-time-picker").removeClass("focus");
    // return false
  });
  $(".date-time").on("keydown", function(e) {
    return false;
    // $(this).focus()
  });
  $(".dayNumber").on("click", function(e) {
    // console.log(e.currentTarget)
    // if(e.currentTareget)
    $(".selected").removeClass("selected");
    $(this).addClass("selected");
    let selectedDate = "";
    selectedDate += $(this).html() + " ";
    selectedDate += $("#month").html() + ", ";
    selectedDate += $("#year").html();
    // console.log(selectedDate)
    $(".date-time").val(selectedDate);
    $(".date-time").focus();
    // $(".date-time-picker").removeClass("focus");
  });
  
  $(document).on("click", e => {
    var datePicker = $(".date-time-picker");
    if (!datePicker.is(e.target) && datePicker.has(e.target).length === 0)
      $(".date-time-picker").removeClass("focus");
  });
  
  $(".selected-month").on("click", e => {
    $(".dates-content").hide();
    $(".month-year").show();
    $(".dates").css("background", "#fbf6f6");
  });
  
  $(".select-my").on("click", e => {
    //   Select month
    let selector = $(".selector")[0];
    let months = $(".monthSelector");
    let years = $(".yearSelector");
    let selectedMonth = "";
    let selectedYear = "";
  
    for (let i = 0; i < months.length; i++) {
      let crntMonth = months[i];
      if (
        crntMonth.offsetTop < selector.offsetTop &&
        crntMonth.offsetTop + crntMonth.offsetHeight >
          selector.offsetTop + selector.offsetHeight
      ) {
        selectedMonth = $(crntMonth).html();
      }
    }
    for (let i = 0; i < years.length; i++) {
      let crntYear = years[i];
      if (
        crntYear.offsetTop < selector.offsetTop &&
        crntYear.offsetTop + crntYear.offsetHeight >
          selector.offsetTop + selector.offsetHeight
      ) {
        selectedYear = $(crntYear).html();
      }
    }
    $(".selected-month #month").html(selectedMonth);
    $(".selected-month #year").html(selectedYear);
    // console.log(selectedMonth + ", " + selectedYear);
    $(".selected-month").data("month", selectedMonth + ", " + selectedYear);
  
    fillCalendar();
  
    $(".dates-content").show();
    $(".month-year").hide();
    $(".dates").css("background", "");
  });
  
  const fillCalendar = function() {
    $(".outOfMonth").removeClass("outOfMonth");
    $(".selected").removeClass("selected");
    let selectedMonth = $(".selected-month").data("month");
    let selectedMonthDate = new Date(selectedMonth);
    let selectedYear = selectedMonthDate.getFullYear();
    let isJan = selectedMonthDate.getMonth() == 0;
    let lastMonth = selectedMonthDate.getMonth() - 1;
    let lastDayInLastMonthDate = {};
    if (isJan) {
      let lastYear = selectedMonthDate.getFullYear() - 1;
      lastDayInLastMonthDate = new Date(lastYear, 12, 0);
    } else {
      lastDayInLastMonthDate = new Date(selectedYear, lastMonth + 1, 0);
    }
  
    let firstDayOfMonth = new Date(selectedMonth).getDay();
  
    // let firstWeekInCal = [];
    let lastDateInLastMonth = lastDayInLastMonthDate.getDate();
    let lastDayInLastMonth = lastDayInLastMonthDate.getDay();
  
    let monthDayCounter = 1;
    const week1 = $("#week1");
    for (let d = 0; d < 7; d++) {
      if (d <= lastDayInLastMonthDate.getDay()) {
        let thisDay = lastDateInLastMonth - lastDayInLastMonth + d;
        $("#week1 #day" + (d + 1)).html(thisDay);
        $("#week1 #day" + (d + 1)).addClass("outOfMonth");
  
        // firstWeekInCal.push(thisDay);
      } else {
        $("#week1 #day" + (d + 1)).html(monthDayCounter);
        // firstWeekInCal.push(monthDayCounter);
        monthDayCounter++;
      }
    }
  
    // let calendarWeeks = [firstWeekInCal]
    let daysOfSelectedMonth = new Date(
      selectedYear,
      selectedMonthDate.getMonth() + 1,
      0
    ).getDate();
    let nextMonthCounter = 1;
    for (let w = 0; w <= 4; w++) {
      let weekEl = $("#week" + (w + 2));
      // let calendarWeek = [];
      for (let d = 0; d < 7; d++) {
        if (monthDayCounter <= daysOfSelectedMonth) {
          // calendarWeek.push(monthDayCounter);
          weekEl.children("#day" + (d + 1)).html(monthDayCounter);
          monthDayCounter++;
        } else {
          // calendarWeek.push(nextMonthCounter);
          weekEl.children("#day" + (d + 1)).html(nextMonthCounter);
          weekEl.children("#day" + (d + 1)).addClass("outOfMonth");
          nextMonthCounter++;
        }
      }
    }
  };
  
  
  $(".months").on("scroll", function(e) {
      // scrolling up
      // if (e.originalEvent.wheelDelta / 120 > 0) {
        console.log("lala")
        if ($(e.target).scrollTop() == 0)
          $(".monthSelector")
            .last()
            .prependTo(".months");
      // } else {
        if (
          $(e.target).scrollTop() + $(e.target).innerHeight() >=
          $(e.target)[0].scrollHeight
        ) {
          $(".monthSelector")
            .first()
            .appendTo(".months");
        }
      // }
      return false;
    });
  
  
    $(".years").on("scroll", function(e) {
      // scrolling up
      // if (e.originalEvent.wheelDelta / 120 > 0) {
        if ($(e.target).scrollTop() == 0) {
          $(".yearSelector")
            .last()
            .remove();
          let year =
            parseInt(
              $(".yearSelector")
                .first()
                .html()
            ) - 1;
          let yearDiv =
            "<div class='yearSelector' id='" + year + "'>" + year + "</div>";
          $(".years").prepend(yearDiv);
        }
      // } else {
      console.log($(e.target).scrollTop() + $(e.target).innerHeight() )
        if (
          $(e.target).scrollTop() + $(e.target).innerHeight() >=
          $(e.target)[0].scrollHeight
        ) {
          $(".yearSelector")
            .first()
            .remove();
          let year =
            parseInt(
              $(".yearSelector")
                .last()
                .html()
            ) + 1;
          let yearDiv =
            "<div class='yearSelector' id='" + year + "'>" + year + "</div>";
          $(".years").append(yearDiv);
        }
      // }
      return false;
    });