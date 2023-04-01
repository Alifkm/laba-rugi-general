<div class = "d-flex justify-content-center">
  @if(auth()->user()->adminType->admin_type_name === "superAdmin")
    <div class = "d-flex justify-content-center">
      <a href="/transaction-source/{{ $transactionSource->id }}/edit" id="{{ $transactionSource->id }}" class="edit btn btn-outline-success btn-sm">Detail</a>
    </div>
  @else
    <div class = "d-flex justify-content-center">
      <a href="/transaction-source/{{ $transactionSource->id }}/edit" id="{{ $transactionSource->id }}" class="edit btn btn-outline-success btn-sm">Edit</a>
      <form action="/transaction-source/{{ $transactionSource->id }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" value="{{ $transactionSource->id }}" name="id">
        <button type="submit" class="delete btn btn-outline-danger btn-sm mx-1">Delete</button>
      </form>    
      {{-- <a href="javascript:void(0)" id="{{ $transactionSource->id }}{{ $transactionSource->transaction_source_name }}" data-toggle="tooltip" data-original-title="Delete"  class="delete btn btn-outline-danger btn-sm mx-1">Delete</a> --}}
    </div>
  @endif
</div>
