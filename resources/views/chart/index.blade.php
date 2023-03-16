@extends('layouts/app')

@section('content')
  <div class="container">
    <div class="row mb-1">
      <label for="col-auto" class="col-lg-auto col-12 col-form-label mb-2">Filter By : </label>
      <form method="POST" action="{{ route('chart.filter') }}" class="col-12 col-lg-auto row p-0 m-0" id="filterMonthWrapper" autocomplete="off">
        @csrf
        {{-- <div class="col-lg-2 col-12 mb-2">
          <select class="form-select" aria-label="Default select example" id="filter-option"
            onchange="changeChart(this.value)">
            <option value="1" selected>Yearly</option>
            <option value="2">Annually</option>
          </select>
        </div> --}}

        <div class="col-lg-auto col-12 mb-2">
          <select class="form-select" aria-label="Default select example" name="filterOption" id="filter-option" onchange="changeChart(this.value)">
            <option value="1" selected>Yearly</option>
            <option value="2">Annually</option>
          </select>
        </div>

        <div class="col-12 col-lg-auto mb-2">
          <input type="text" name="filterMonths" class="form-control" id="filterMonths"
            value="{{ old('filterMonths') }}" max="<?php echo date('m-d'); ?>" required>
            @error('filterMonths')
              <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-12 col-lg-auto mb-3">
          <button id="submit-button" class="btn btn-outline-primary mx-1" type="submit">Submit</button>
        </div>
      </form>
    </div>

      <div class="row justify-content-center mb-5">
          <div class="col-md-12 d-none" id="sec-chart">
            <div class="card">
              <div class="card-header">
                <h1 class="text-center h4">
                  Grafik laba rugi per tahun 
                </h1>
              </div>
              <div class="card-body">
                <div id="chartYear"></div>
              </div>
            </div>
          </div>

          <div class="col-md-12" id="first-chart">
            <div class="card">
              <div class="card-header" id="card-bulanan">
                <h1 class="text-center h4">
                  Grafik laba rugi tahun {{ $filterMonths }} 
                </h1>
                {{-- {{ request()->segment(count(request()->segments())) }} --}}
              </div>
              <div class="card-body">
                <div id="chartMonth"></div>
              </div>
            </div>
          </div>

      </div>
    {{-- @else
      <div>
        <h1 class="text-center h4">Insert date to see chart</h1>
      </div>
    @endif --}}
  </div>
    
  {{-- <script src="https://code.highcharts.com/highcharts.js"></script> --}}
  <script type="text/javascript">
    $(document).ready(function(){
      $("#filterMonths").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true
      });   
    });

    var labaYearly = <?php echo json_encode($totalLaba); ?>;
    var month = <?php echo json_encode($month); ?>;
    Highcharts.chart('chartMonth', {
      title: {
        text: ''
      },
      xAxis: {
        categories: month
      },
      yAxis: {
        title: {
          text: 'Nominal laba rugi tahunan'
        }
      },
      plotOptions: {
        series: {
          allowPointSelect: true
        }
      },
      series: [{
        name: 'Nominal laba rugi',
        data: labaYearly
      }]
    });

    var labaYear = <?php echo json_encode($totalLabaYear); ?>;
    var year = <?php echo json_encode($year); ?>;
    Highcharts.chart('chartYear', {
      title: {
        text: ''
      },
      xAxis: {
        categories: year
      },
      yAxis: {
        title: {
          text: 'Nominal laba rugi per tahun'
        }
      },
      plotOptions: {
        series: {
          allowPointSelect: true
        }
      },
      series: [{
        name: 'Nominal laba rugi',
        data: labaYear
      }]
    });
    
    function changeChart(val) {
      const filterMonths = document.getElementById('filterMonths');
      let viewChartYearly = false;

      const first_chr = document.getElementById('first-chart');
      const sec_chr = document.getElementById('sec-chart');
      const year_opt = document.getElementById('filterMonths');
      const submit_btn = document.getElementById('submit-button');
      
      first_chr.classList.toggle('d-none');
      sec_chr.classList.toggle('d-none');
      year_opt.classList.toggle('d-none');


      if(val == 1) {
        submit_btn.classList.remove('d-none');
      }else {
        submit_btn.classList.add('d-none');
      }
      // console.log(viewChartYearly);
      // first_chr.classList.toggle('d-none');
    }
  </script>

@endsection
