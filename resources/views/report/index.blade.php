@extends('layouts/app')

@section('content')
  <div class="container d-flex flex-column bg-light">
    <div>
      <h1 class="display-4 mb-4">Profit and Loss Report</h1>
    </div>

    <div class="d-flex justify-content-between align-items-center">
      <div class="col-12 col-lg-11 row m-0 p-1">
        <div class="col-12 col-lg-auto">
          <label for="filter" class="col-form-label">Filter By :</label>
        </div>
        <div class="col-12 col-lg-auto mb-2">
          <select class="form-select" aria-label="Default select example" id="filter-option"
            onchange="changeChart(this.value)">
            <option value="1" selected>Monthly</option>
            <option value="2">Yearly</option>
          </select>
        </div>
              
        <form method="POST" action="{{ route('report.filter') }}" class="col-12 col-lg-auto row p-0 m-0" id="filterMonthWrapper" autocomplete="off">
          @csrf
          <div class="col-12 col-lg-auto">
            <label for="filterMonth" class="col-form-label">Pick Month and Year:</label>
          </div>
          <div class="col-12 col-lg-auto mb-3">
            <input type="month" name="filterMonth" class="form-control" id="filterMonth"
              value="{{ old('filterMonth') }}" max="<?php echo date('m-d'); ?>" required>
            @error('filterMonth')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="col-12 col-lg-auto mb-3 d-flex justify-content-between">
            <button class="btn btn-outline-primary mx-1" type="submit">Submit</button>
            <a href="{{ route('chart.index') }}" class="chart-btn-mobile mx-1"><button class="btn btn-outline-primary" type="button">Chart</button></a>
          </div>
        </form>
  
        <form method="POST" action="{{ route('report.filter') }}" class="col-12 col-lg-auto row p-0 m-0" id="filterYearWrapper" autocomplete="off">
          @csrf
          <div class="col-12 col-lg-auto">
            <label for="filterYear" class="col-form-label">Pick Year:</label>
          </div>
          <div class="col-12 col-lg-auto mb-3">
            <input type="text" name="filterYear" class="form-control" id="filterYear"
              value="{{ old('filterYear') }}" max="<?php echo date('m-d'); ?>" required>
              @error('filterYear')
                <p class="text-danger">{{ $message }}</p>
              @enderror
          </div>
          <div class="col-12 col-lg-auto mb-3 d-flex justify-content-between">
            <button class="btn btn-outline-primary mx-1" type="submit">Submit</button>
            <a href="{{ route('chart.index') }}" class="chart-btn-mobile mx-1"><button class="btn btn-outline-primary" type="button">Chart</button></a>
          </div>
        </form>
      </div>
      
      <div class="col-12 col-lg-auto chart-btn-desktop mb-3">
          <a href="{{ route('chart.index') }}"><button class="btn btn-outline-primary" type="button">Chart</button></a>
      </div>
    </div>


    @if($filterMonth === 0 && $filterYear === 0)
      <div class="d-flex justify-content-center">
        <h4>insert date to see the report</h4>
      </div>
    @else
      <div class="d-flex align-items-center justify-content-center bg-secondary rounded text-light mb-3">
        @if($filterYear === null && $filterMonth !== 0)
          <h4 class="my-2">Periode {{ $monthAndYear }}</h4>
          {{-- {{ date('F Y', strtotime($monthAndYear)) }} --}}
        @elseif($filterMonth === null && $filterYear !== 0)
          <h4 class="my-2">Periode Tahun {{ $filterYear }}</h4>
        @endif
      </div>

      @foreach ($profitLossComponents as $profitLossComponent)

        {{-- PENGHASILAN NETO --}}
        @if ($profitLossComponent->profit_loss_component_name === 'Penghasilan Neto')
          <div>
            <h4>Penghasilan Neto</h4>
            @php
              $penghasilanNetoKey = 0;
            @endphp
            <ul>
              @foreach ($transactionSources as $transactionSource)
                @if($transactionSource->profitLossComponent->profit_loss_component_name  === 'Penghasilan Neto')
                  <li class="d-flex justify-content-between">
                    <p>{{ $transactionSource->transaction_source_name }}: </p>
                    @php
                    if(sizeof($penghasilanNetoArr) < 1) {
                      echo '0';
                    }
                    else {
                      echo 'Rp ' . number_format($penghasilanNetoArr[$penghasilanNetoKey],0,',','.');
                      $penghasilanNetoKey++;
                    }
                    @endphp
                  </li>
                @endif
              @endforeach
            </ul>
            <div class="d-flex justify-content-between">
              <h5>Total Penghasilan Neto:</h5>
              <h5>{{ $totalPenghasilanNeto != 0 ? 'Rp. ' . number_format($totalPenghasilanNeto, 0, ',', '.') : '-' }}</h5>
            </div>
          </div>
            
          <hr>

        {{-- BEBAN POKOK PENJUALAN --}}
        @elseif($profitLossComponent->profit_loss_component_name === 'Beban Pokok Penjualan')
          <div>
            <h4>Beban Pokok Penjualan</h4>
            @php
              $bebanPokokPenjualanKey = 0;
            @endphp
            <ul>
              @foreach ($transactionSources as $transactionSource)
                @if($transactionSource->profitLossComponent->profit_loss_component_name  === 'Beban Pokok Penjualan')
                  <li class="d-flex justify-content-between">
                    <p>{{ $transactionSource->transaction_source_name }}: </p>
                    @php
                    if(sizeof($bebanPokokPenjualanArr) < 1) {
                      echo '0';
                    }
                    else {
                      echo 'Rp ' . number_format($bebanPokokPenjualanArr[$bebanPokokPenjualanKey],0,',','.');
                      $bebanPokokPenjualanKey++;
                    }
                    
                    @endphp
                  </li>
                @endif
              @endforeach
            </ul>
            <div class="d-flex justify-content-between">
              <h5>Total Beban Pokok Penjualan:</h5>
              <h5>{{ $totalBebanPokokPenjualan != 0 ? 'Rp. ' . number_format($totalBebanPokokPenjualan, 0, ',', '.') : '-' }}</h5>
            </div>
          </div>
            
          <hr>

          {{-- LABA RUGI BRUTO --}}
          <div class="d-flex justify-content-between">
            <h4>Laba / Rugi Bruto:</h4>
            <h4>Rp. {{ number_format($labaRugiBruto, 0, ',', '.') }}</h4>
          </div>
          
          <hr>

        {{-- BEBAN USAHA --}}
        @elseif($profitLossComponent->profit_loss_component_name === 'Beban Usaha')
          <div>
            <h4>Beban Usaha</h4>
            @php
              $bebanUsahakey = 0;
            @endphp
            <ul>
              @foreach ($transactionSources as $transactionSource)
                @if($transactionSource->profitLossComponent->profit_loss_component_name  === 'Beban Usaha')
                  <li class="d-flex justify-content-between">
                    <p>{{ $transactionSource->transaction_source_name }}: </p>
                    @php
                      if(sizeof($bebanUsahaArr) < 1) {
                        echo '0';
                      }
                      else {
                        echo 'Rp ' . number_format($bebanUsahaArr[$bebanUsahakey],0,',','.');
                      $bebanUsahakey++;
                      }
                      
                    @endphp
                  </li>
                @endif
              @endforeach
            </ul>
            <div class="d-flex justify-content-between">
              <h5>Total Beban Usaha:</h5>
              <h5>{{ $totalBebanUsaha != 0 ? 'Rp. ' . number_format($totalBebanUsaha, 0, ',', '.') : '-' }}</h5>
            </div>
          </div>

          <hr>

          {{-- LABA RUGI USAHA --}}
          <div class="d-flex justify-content-between">
            <h4>Laba / Rugi Usaha</h4>
            <h4>Rp. {{ number_format($labaRugiUsaha, 0, ',', '.') }}</h4>
          </div>

          
          
        {{-- BEBAN Lain --}}
        @elseif($profitLossComponent->profit_loss_component_name === 'Beban Lain - Lain')
          <hr>
          <div>
            <h4>Beban Lain - Lain</h4>
            @php
              $bebanLainkey = 0;
            @endphp
            <ul>
              @foreach ($transactionSources as $transactionSource)
                @if($transactionSource->profitLossComponent->profit_loss_component_name  === 'Beban Lain - Lain')
                  <li class="d-flex justify-content-between">
                    <p>{{ $transactionSource->transaction_source_name }}: </p>
                    @php
                      if(sizeof($bebanLainArr) < 1) {
                        echo '0';
                      }
                      else {
                        echo 'Rp ' . number_format($bebanLainArr[$bebanLainkey],0,',','.');
                      $bebanLainkey++;
                      }
                      
                    @endphp
                  </li>
                @endif
              @endforeach
            </ul>
            <div class="d-flex justify-content-between">
              <h5>Total Beban Lain - Lain:</h5>
              <h5>{{ $totalBebanLain != 0 ? 'Rp. ' . number_format($totalBebanLain, 0, ',', '.') : '-' }}</h5>
            </div>
          </div>

        @endif

      @endforeach

      <hr>

      {{-- LABA RUGI SEBELUM PPH --}}
      <div class="d-flex justify-content-between">
        <h4>Laba / Rugi Sebelum Pajak Penghasilan</h4>
        <h4>Rp. {{ number_format($labaRugiSebelumPajak, 0, ',', '.') }}</h4>
      </div>
    
      <hr>

      <div class="d-flex justify-content-between">
        <h4>Pajak Penghasilan</h4>
        <h4>Rp. {{ number_format($pajakPenghasilan, 0, ',', '.') }}</h4>
      </div>

      <hr>

      <div class="d-flex justify-content-between mb-3">
        <h4>Laba / Rugi Neto</h4>
        <h4>Rp. {{ number_format($labaRugiNeto, 0, ',', '.') }}</h4>
      </div>
    @endif

  </div>

  <script type="text/javascript">
    $(document).ready(function(){
        $("#filterYear").datepicker({
            format: "yyyy",
            viewMode: "years", 
            minViewMode: "years",
            autoclose:true
        });   
    });

    const filterOption = document.getElementById('filter-option');
    const filterMonthWrapper = document.getElementById('filterMonthWrapper');
    const filterYearWrapper = document.getElementById('filterYearWrapper');

    filterYearWrapper.classList.add('d-none');

    function changeChart(val) {
        if(val === "1") {
          filterMonthWrapper.classList.remove('d-none');
          filterYearWrapper.classList.add('d-none');
        }else {
          filterMonthWrapper.classList.add('d-none');
          filterYearWrapper.classList.remove('d-none');
        }
    }
  </script>
@endsection
