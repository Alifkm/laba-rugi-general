@extends('layouts/app')

@section('content')
  <div class="container d-flex flex-column bg-light">
    <div>
      <h1 class="mb-5">Add new income</h1>
    </div>
    <div>
      <form method="POST" action="{{ url('/income') }} " autocomplete="off">
        @csrf
        <div class="row">
          <div class="mb-3 col-lg-4 col-12">
            <label for="transaction_name" class="form-label">Transaction Name</label>
            <input type="text" name="transaction_name" class="form-control" id="transaction_name" value="{{ old('transaction_name') }}">
            @error('transaction_name')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="mb-3 col-lg-4 col-12">
            <label for="transaction_source_id" class="form-label">Source</label>
            <select name="transaction_source_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
              @foreach ($sources as $source)
                <option value={{ $source->id }}>{{ $source->transaction_source_name }}</option>  
              @endforeach
            </select>
            @error('transaction_source_id')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="mb-3 col-lg-4 col-12">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" class="form-control" id="date" value="{{ old('date') }}" max="<?php echo date("Y-m-d"); ?>" >
            @error('date')
              <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        </div>
        <div class="row mb-3">
          <div class="mb-3 col-lg-4 col-12">
            <label for="total" class="form-label">Total</label>
            <input type="text" name="total" class="form-control" id="total" value="{{ old('total') }}">
            @error('total')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="d-flex">
          <button type="submit" class="btn btn-outline-primary">Submit</button>
          <a href="/income"><button type="button" class="btn btn-outline-danger mx-2">Cancel</button></a>
        </div>
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