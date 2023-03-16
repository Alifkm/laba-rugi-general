@extends('layouts/app')

@section('content')
  <div class="container d-flex flex-column bg-light">
    <div>
      <h1 class="display-4 mb-4">Statements of Income</h1>
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
              
        <form method="POST" action="{{ route('dashboard.filter') }}" class="col-12 col-lg-auto row p-0 m-0" id="filterMonthWrapper" autocomplete="off">
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
            <a href="{{ url('/chart') }}" class="chart-btn-mobile mx-1"><button class="btn btn-outline-primary" type="button">Chart</button></a>
          </div>
        </form>
  
        <form method="POST" action="{{ route('dashboard.filter') }}" class="col-12 col-lg-auto row p-0 m-0" id="filterYearWrapper" autocomplete="off">
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
            <a href="{{ url('/chart') }}" class="chart-btn-mobile mx-1"><button class="btn btn-outline-primary" type="button">Chart</button></a>
          </div>
        </form>
      </div>
      
      <div class="col-12 col-lg-auto chart-btn-desktop mb-3">
          <a href="{{ route('chart.index') }}"><button class="btn btn-outline-primary" type="button">Chart</button></a>
      </div>
    </div>

    @if($filterMonth === 0 && $filterYear === 0)
    <div class="d-flex justify-content-center">
      <h4>insert date to see the data</h4>
    </div>
    @else
    <div class="d-flex align-items-center justify-content-center bg-secondary rounded text-light">
      @if($filterYear === null && $filterMonth !== 0)
        <h4 class="my-2">{{ date('F Y', strtotime($filterMonth)) }}</h4>
      @elseif($filterMonth === null && $filterYear !== 0)
        <h4 class="my-2">Tahun {{ $filterYear }}</h4>
      @endif
    </div>
    <hr>
    <div>
      <h4>Penghasilan Neto</h4>
      <ul>
        <li class="d-flex justify-content-between">
          <p>Pendapatan Project: </p>
          <p>Rp. {{ number_format($penghasilanNeto, 0, ',', '.') }}</p>
        </li>
      </ul>
      <div class="d-flex justify-content-between">
        <h5>Total Penghasilan Neto:</h5>
        <h5>Rp. {{ number_format($penghasilanNeto, 0, ',', '.') }}</h5>
      </div>
    </div>
    <hr>
    <div>
      <h4>Beban Pokok Penjualan</h4>
      <ul>
        <li class="d-flex justify-content-between">
          <p>Gaji Karyawan: </p>
          <p>Rp. {{ number_format($gajiKaryawan, 0, ',', '.') }}</p>
        </li>
      </ul>
      <ul>
        <li class="d-flex justify-content-between">
          <p>Pembelian material: </p>
          <p>Rp. {{ number_format($material, 0, ',', '.') }}</p>
        </li>
      </ul>
        {{-- <ul>
          <li class="d-flex justify-content-between">
            <p>pembayaran lainnya untuk client: </p>
            <p>Rp. {{ number_format($pembayaranLainClient, 0, ',', '.') }}</p>
          </li>
        </ul> --}}
        <div class="d-flex justify-content-between">
          <h5>Total Beban Pokok Penjualan:</h5>
          <h5>Rp. {{ number_format($bebanPokok, 0, ',', '.') }}</h5>
        </div>
    </div>
    <hr>
    <div class="d-flex justify-content-between">
      <h4>Laba / Rugi Bruto:</h4>
      {{-- <h4>{{ $labaBruto <= 0 ? "Rugi" : "Laba" }} Bruto:</h4> --}}
      <h4>Rp. {{ number_format($labaBruto, 0, ',', '.') }}</h4>
    </div>
    <hr>
      <div>
        <h4>Beban Usaha</h4>
        <ul>
          <li class="d-flex justify-content-between">
            <p>Penyusutan: </p>
            <p>Rp. {{ number_format($penyusutan, 0, ',', '.') }}</p>
          </li>
        </ul>
        <ul>
          <li class="d-flex justify-content-between">
            <p>Transportasi: </p>
            <p>Rp. {{ number_format($transportasi, 0, ',', '.') }}</p>
          </li>
        </ul>
        <ul>
          <li class="d-flex justify-content-between">
            <p>Pemeliharaan: </p>
            <p>Rp. {{ number_format($pemeliharaan, 0, ',', '.') }}</p>
          </li>
        </ul>
        <ul>
          <li class="d-flex justify-content-between">
            <p>Dokumen: </p>
            <p>Rp. {{ number_format($dokumen, 0, ',', '.') }}</p>
          </li>
        </ul>
        <ul>
          <li class="d-flex justify-content-between">
            <p>Listrik dan telepon: </p>
            <p>Rp. {{ number_format($listrikTelepon, 0, ',', '.') }}</p>
          </li>
        </ul>
        <ul>
          <li class="d-flex justify-content-between">
            <p>Kantor: </p>
            <p>Rp. {{ number_format($kantor, 0, ',', '.') }}</p>
          </li>
        </ul>
        <ul>
          <li class="d-flex justify-content-between">
            <p>Lain-lain: </p>
            <p>Rp. {{ number_format($pembayaranLain, 0, ',', '.') }}</p>
          </li>
        </ul>
        <div class="d-flex justify-content-between">
          <h5>Total Beban Usaha:</h5>
          <h5>Rp. {{ number_format($bebanUsaha, 0, ',', '.') }}</h5>
        </div>
      </div>
      <hr>
      <div class="d-flex justify-content-between">
        <h4>Laba / Rugi Usaha</h4>
        {{-- <h4> {{ $labaUsaha <= 0 ? "Rugi" : "Laba" }} Usaha</h4> --}}
        <h4>Rp. {{ number_format($labaUsaha, 0, ',', '.') }}</h4>
      </div>
      {{-- <hr>
      <div class="d-flex justify-content-between">
        <h4>Penghasilan (Beban) Lain-Lain</h4>
        <h4>-</h4>
      </div> --}}
      <hr>
      <div class="d-flex justify-content-between">
        <h4>Laba / Rugi Sebelum Pajak Penghasilan</h4>
        {{-- <h4>{{ $labaUsaha <= 0 ? "Rugi" : "Laba" }} Sebelum Pajak Penghasilan</h4> --}}
        <h4>Rp. {{ number_format($labaUsaha, 0, ',', '.') }}</h4>
      </div>
      <hr>
      <div class="d-flex justify-content-between">
        <h4>Pajak Penghasilan</h4>
        <h4>Rp. {{ number_format($pph, 0, ',', '.') }}</h4>
      </div>
      {{-- <div>
        <h4>Pajak Penghasilan</h4>
        <ul>
          <li class="d-flex justify-content-between">
            <p>Kini: </p>
            <p>Rp. {{ number_format($pph, 0, ',', '.') }}</p>
          </li>
        </ul>
        <ul>
          <li class="d-flex justify-content-between">
            <p>Tangguhan: </p>
            <p>-</p>
          </li>
        </ul>
      </div> --}}
      <hr>
      <div class="d-flex justify-content-between">
        <h4>Laba / Rugi Neto</h4>
        {{-- <h4>{{ $labaUsaha - $pph <= 0 ? "Rugi" : "Laba" }} Neto</h4> --}}
        <h4>Rp. {{ $pph >= 0 ? number_format($labaUsaha - $pph, 0, ',', '.') : number_format($labaUsaha + $pph, 0, ',', '.') }}</h4>
      </div>
      <hr>
      {{-- <div class="d-flex justify-content-between">
        <h3>Total {{ $labaUsaha - $pph <= 0 ? "Rugi" : "Laba" }} Komprehensif</h3>
        <h3>Rp. {{ number_format($labaUsaha - $pph, 0, ',', '.') }}</h3>
      </div>
      <hr> --}}
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