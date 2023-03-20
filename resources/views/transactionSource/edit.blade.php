@extends('layouts/app')

@section('content')
  <div class="container d-flex flex-column bg-light">
    <div>
      <h1 class="mb-5">{{ $user === 'superAdmin' ? 'Detail transaction source' : 'Edit transaction source' }}</h1>
    </div>
    <div>
      <form method="POST" action="/transaction-source/{{ $transactionSource->id }}"  autocomplete="off">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="mb-3 col-lg-4 col-12">
            <label for="transaction_source_name" class="form-label">Transaction Source Name</label>
            <input type="text" name="transaction_source_name" class="form-control" id="transaction_source_name" value="{{ $transactionSource->transaction_source_name }}" 
            {{ $user === 'superAdmin' ? "disabled" : "" }}>
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
                @if($transactionSource->transactionTypes->transaction_type_name == $type->transaction_type_name)
                  <option value={{ $type->id }} selected>{{ $type->transaction_type_name }}</option>
                @else  
                  <option value={{ $type->id }}>{{ $type->transaction_type_name }}</option>
                @endif  
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
            <select name="profit_loss_component_id" class="form-select form-select-sm" aria-label=".form-select-sm example" {{ $user === 'superAdmin' ? "disabled" : "" }}>
              @foreach ($profitLossComponents as $profitLossComponent)
                @if($transactionSource->profitLossComponent->profit_loss_component_name == $profitLossComponent->profit_loss_component_name)
                  <option value={{ $profitLossComponent->id }} selected>{{ $profitLossComponent->profit_loss_component_name }}</option>
                @else  
                  <option value={{ $profitLossComponent->id }}>{{ $profitLossComponent->profit_loss_component_name }}</option>
                @endif  
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