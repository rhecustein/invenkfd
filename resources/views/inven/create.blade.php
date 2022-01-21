@extends('layouts.kfd')
@section('content')

{{-- <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Example label</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
</div>
<div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Another label</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div> --}}
<form action="{{ url('store-data') }}" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="nama_inventaris" id="formGroupExampleInput">
    </div>

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<form action="{{ url('store-data') }}" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="nama_inventaris" id="formGroupExampleInput">
    </div>

        {{-- <div class="mb-3">
            <label>Kategori</label>
            <select class="form-control" name="id_kategori">
                <option holder>Pilih Kategori</option>
            </select>
        </div> --}}

    <div class="mb-3">
        <label for="">Jumlah</label>
        <input type="text" class="form-control" name="qty_inventaris" id="formGroupExampleInput">
=======
    <div class="mb-3">
        <label>Kategori</label>
        <select class="form-control" name="category_id">
            <option holder>Pilih Kategori</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="">Tags</label>
        <select class="form-control" name="tags[]">
            <option holder>Pilih Tag</option>
        </select>
>>>>>>> Stashed changes
    </div>

    <div class="mb-3">
        <label>Keterangan Barang</label>
<<<<<<< Updated upstream
        <input type="text" class="form-control" name="keterangan_inventaris" id="formGroupExampleInput">
    </div>
    <a href="{{ route('inventoris') }}"><button type="submit" class="btn btn-primary btn-block">Simpan Barang</button></a>
</form>

=======
    <div class="mb-3">
        <label>Kategori</label>
        <select class="form-control" name="category_id">
            <option holder>Pilih Kategori</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="">Tags</label>
        <select class="form-control" name="tags[]">
            <option holder>Pilih Tag</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Keterangan Barang</label>
        <textarea class="form-control" name="content"></textarea>
    </div>

=======
        <textarea class="form-control" name="content"></textarea>
    </div>

>>>>>>> Stashed changes
    <div class="content-datepicker">
      <div class="date-time-picker focus">
        <input class="date-time" type="text">
        <div class="dates">
          <div class="dates-content">
            <div class="dates-header">
              <div class="selected-month" data-month="September, 2018">
                <span id="month" data-month="9">September</span>, <span id="year" data-year="2018">2018</span>
              </div>
              <div class="days">
                <div class="header">
                  <div class="dayName">S</div>
                  <div class="dayName">M</div>
                  <div class="dayName">T</div>
                  <div class="dayName">W</div>
                  <div class="dayName">T</div>
                  <div class="dayName">F</div>
                  <div class="dayName">S</div>
                </div>
                <br>
                <div class="numbers">
                  <div class="week" id="week1">
                    <div class="dayNumber outOfMonth" id="day1">31</div>
                    <div class="dayNumber" id="day2">1</div>
                    <div class="dayNumber" id="day3">2</div>
                    <div class="dayNumber" id="day4">3</div>
                    <div class="dayNumber" id="day5">4</div>
                    <div class="dayNumber" id="day6">5</div>
                    <div class="dayNumber" id="day7">6</div>
                  </div>
                  <br>
                  <div class="week" id="week2">
                    <div class="dayNumber" id="day1">7</div>
                    <div class="dayNumber" id="day2">8</div>
                    <div class="dayNumber" id="day3">9</div>
                    <div class="dayNumber" id="day4">10</div>
                    <div class="dayNumber" id="day5">11</div>
                    <div class="dayNumber" id="day6">12</div>
                    <div class="dayNumber" id="day7">13</div>
                  </div>
                  <br>
                  <div class="week" id="week3">
                    <div class="dayNumber" id="day1">14</div>
                    <div class="dayNumber" id="day2">15</div>
                    <div class="dayNumber" id="day3">16</div>
                    <div class="dayNumber" id="day4">17</div>
                    <div class="dayNumber" id="day5">18</div>
                    <div class="dayNumber" id="day6">19</div>
                    <div class="dayNumber" id="day7">20</div>
                  </div>
                  <br>
                  <div class="week" id="week4">
                    <div class="dayNumber" id="day1">21</div>
                    <div class="dayNumber selected" id="day2">22</div>
                    <div class="dayNumber" id="day3">23</div>
                    <div class="dayNumber" id="day4">24</div>
                    <div class="dayNumber" id="day5">25</div>
                    <div class="dayNumber" id="day6">26</div>
                    <div class="dayNumber" id="day7">27</div>
                  </div>
                  <br>
                  <div class="week" id="week5">
                    <div class="dayNumber" id="day1">28</div>
                    <div class="dayNumber" id="day2">29</div>
                    <div class="dayNumber" id="day3">30</div>
                    <div class="dayNumber outOfMonth" id="day4">1</div>
                    <div class="dayNumber outOfMonth" id="day5">2</div>
                    <div class="dayNumber outOfMonth" id="day6">3</div>
                    <div class="dayNumber outOfMonth" id="day7">4</div>
                  </div>
                  <div class="week" id="week6">
    <div class="dayNumber" id="day1">28</div>
                    <div class="dayNumber" id="day2">29</div>
                    <div class="dayNumber" id="day3">30</div>
                    <div class="dayNumber outOfMonth" id="day4">1</div>
                    <div class="dayNumber outOfMonth" id="day5">2</div>
                    <div class="dayNumber outOfMonth" id="day6">3</div>
                    <div class="dayNumber outOfMonth" id="day7">4</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="month-year" style="display: none">
            <div class="shadow-top">

            </div>
            <div class="shadow-bottom">

            </div>
                <div class="selector">

                </div>
                <div class="years">

                </div>
                <div class="months">
                  <div class="monthSelector" id="1">January</div>
                  <div class="monthSelector" id="2">February</div>
                  <div class="monthSelector" id="3">March</div>
                  <div class="monthSelector" id="4">April</div>
                  <div class="monthSelector" id="5">May</div>
                  <div class="monthSelector" id="6">June</div>
                  <div class="monthSelector" id="7">July</div>
                  <div class="monthSelector" id="8">August</div>
                  <div class="monthSelector" id="9">September</div>
                  <div class="monthSelector" id="10">October</div>
                  <div class="monthSelector" id="11">November</div>
                  <div class="monthSelector" id="12">December</div>
                </div>
                <div class="select-month-year">
                  <a class="select-my"><i class="material-icons">done</i></a>
                </div>
              </div>
        </div>
      </div>
    </div>
    <a href="{{ route('inventoris') }}"><button class="btn btn-primary btn-block">Simpan Barang</button></a>
</form>

<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes

>>>>>>> Stashed changes


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:300,600,700|Pragati+Narrow:700" rel="stylesheet">
<link rel="stylesheet" href="html/demo/app/assets/css/datepicker.css">

@endsection
