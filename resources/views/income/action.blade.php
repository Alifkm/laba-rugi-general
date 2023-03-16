<div class = "d-flex justify-content-center">
  @if(
    $transaction->updated_by === 'owner.create.approved' || 
    $transaction->updated_by === 'owner.edit.approved' ||
    $transaction->updated_by === Auth::user()->name.'.create' ||
    $transaction->updated_by === Auth::user()->name.'.edit' ||
    $transaction->updated_by === Auth::user()->name.'.delete'
  )
    <a class="me-2" href="/income/{{ $transaction->id }}/edit"><button type="button" class="btn btn-sm btn-outline-success btn-action">Detail</button></a>
  @else
    <a class="me-2" href="/income/{{ $transaction->id }}/edit"><button type="button" class="btn btn-sm btn-outline-success btn-action">Edit</button></a>
    <form action="{{ route('income.request-delete') }}" method="POST">
      @csrf
      <input type="hidden" value="{{ $transaction->id }}" name="id">
      <button type="submit" class="btn btn-sm btn-outline-danger show-alert-delete-box btn-action">Delete</button>
    </form>
  @endif
</div>