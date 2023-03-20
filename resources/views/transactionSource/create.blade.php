@extends('layouts/app')

@section('content')
  <div class="container d-flex flex-column bg-light">
    <div>
      <h1 class="mb-5">Add new transaction source</h1>
    </div>
    <div>
      <form method="POST" action="{{ url('/transaction-source') }} " autocomplete="off">
        @csrf
        <div class="row">
          <div class="mb-3 col-lg-4 col-12">
            <label for="transaction_source_name" class="form-label">Transaction Source Name</label>
            <input type="text" name="transaction_source_name" class="form-control" id="transaction_source_name" value="{{ old('transaction_source_name') }}">
            @error('transaction_source_name')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>
        {{-- <div class="row">
          <div class="mb-3 col-lg-4 col-12">
            <label for="transaction_type_id" class="form-label">Transaction Type</label>
            <select name="transaction_type_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
              @foreach ($types as $type)
                <option value={{ $type->id }}>{{ $type->transaction_type_name }}</option>  
              @endforeach
            </select>
            @error('transaction_type_id')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div> --}}
        <div class="row">
          <div class="mb-3 col-lg-4 col-12">
            <label for="profit_loss_component_id" class="form-label">Profit Loss Component</label>
            <select name="profit_loss_component_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
              @foreach ($profitLossComponents as $profitLossComponent)
                <option value={{ $profitLossComponent->id }}>{{ $profitLossComponent->profit_loss_component_name }}</option>  
              @endforeach
            </select>
            @error('profit_loss_component_id')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="d-flex">
          <button type="submit" class="btn btn-outline-primary">Submit</button>
          <a href="/transaction-source"><button type="button" class="btn btn-outline-danger mx-2">Cancel</button></a>
        </div>
      </form>
    </div>
  </div>

  <script type="text/javascript">
	</script>
@endsection