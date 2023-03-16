@extends('layouts/app')

@section('content')
  @php
   $updatedByCondition = 
    $income->updated_by === 'owner.create.approved' || 
    $income->updated_by === 'owner.edit.approved' ||
    $income->updated_by === Auth::user()->name.'.create' ||
    $income->updated_by === Auth::user()->name.'.edit' ||
    $income->updated_by === Auth::user()->name.'.delete';   
  @endphp
  <div class="container d-flex flex-column bg-light pb-3">
    <div>
      <h1 class="mb-5">{{ $updatedByCondition ? "Detail income" : "Edit income" }}</h1>
    </div>
    {{-- <div class="row mb-5">
      <div class="mb-3 col-lg-3 col-md-6 col-12 d-flex flex-column">
        <label for="name" class="form-label">Created by</label>
        <span>{{ $income->created_by }}</span>
      </div>
      <div class="mb-3 col-lg-3 col-md-6 col-12 d-flex flex-column">
        <label for="name" class="form-label">Created date</label>
        <span>{{ date('d M Y', strtotime($income->created_at)) }}</span>
      </div>
      <div class="mb-3 col-lg-3 col-md-6 col-12 d-flex flex-column">
        <label for="name" class="form-label">Last Updated By</label>
        <span>{{ $income->updated_by }}</span>
      </div>
      <div class="mb-3 col-lg-3 col-md-6 col-12 d-flex flex-column">
        <label for="name" class="form-label">Last Updated Date</label>
        <span>{{ date('d M Y', strtotime($income->updated_at)) }}</span>
      </div>
    </div> --}}
    <div>
      <form method="POST" action="{{ url('/income/'.$income->id) }}"  autocomplete="off">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="mb-3 col-lg-4">
            <label for="transaction_name" class="form-label">Transaction Name</label>
            <input type="text" name="transaction_name" class="form-control" id="transaction_name" value="{{ $income->transaction_name }}" {{ $updatedByCondition ? "disabled" : "" }}>
            @error('transaction_name')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="mb-3 col-lg-4">
            <label for="transaction_source_id" class="form-label">Source</label>
            <select name="transaction_source_id" class="form-select form-select-sm" aria-label=".form-select-sm example" {{ $updatedByCondition ? "disabled" : "" }}>
              @if($income->total === 0)
                <option selected>-</option>
              @else
                @foreach ($sources as $source)
                  @if($income->transaction_sources->transaction_source_name == $source->transaction_source_name)
                    <option value={{ $source->id }} selected>{{ $source->transaction_source_name }}</option>
                  @else
                    <option value={{ $source->id }}>{{ $source->transaction_source_name }}</option>
                  @endif  
                @endforeach 
              @endif
            </select>
            @error('transaction_source_id')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="mb-3 col-lg-4">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" class="form-control" id="date" value="{{ $income->date }}" max="<?php echo date("Y-m-d"); ?>" {{ $updatedByCondition ? "disabled" : "" }}>
            @error('date')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="mb-3 col-lg-4">
            <label for="total" class="form-label">Total</label>
            <input type="text" name="total" class="form-control" id="total" value="{{ $income->total }}" {{ $updatedByCondition ? "disabled" : "" }}>
            @error('total')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>
        @if ($updatedByCondition)
          <div class="d-flex">
            <a href="/income"><button type="button" class="btn btn-outline-secondary">Back</button></a>
          </div>
        @else
          <div class="d-flex">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
            <a href="/income"><button type="button" class="btn btn-outline-danger mx-2">Cancel</button></a>
          </div>
        @endif
      </form>
    </div>
  </div>

  <script type="text/javascript">
		
		var rupiah = document.getElementById('total');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, '');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
		}
	</script>
@endsection