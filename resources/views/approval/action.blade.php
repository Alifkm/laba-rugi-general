<div class = "d-flex justify-content-evenly">
  <form action="{{ route('approval.approved') }}" method="POST">
      @csrf
      
      <input type="hidden" value="{{ $transaction->id }}" name="id">
      <input type="hidden"  value="{{ $transaction->updated_by }}" name="type">
      <button type="submit" class="btn btn-sm btn-outline-success show-alert-approve-box">Approve</button>
  </form>

  <form class="ml-2" action="{{ route('approval.decline') }}" method="POST">
      @csrf
      
      <input type="hidden" value="{{ $transaction->id }}" name="id">
      <input type="hidden"  value="{{ $transaction->updated_by }}" name="type">
      <button class="btn btn-sm btn-outline-danger show-alert-delete-box mx-1">Not Approve</button>
  </form>
</div>