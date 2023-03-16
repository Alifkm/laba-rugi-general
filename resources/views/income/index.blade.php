@extends('layouts/app')

@section('content')
  <div class="container">
    <div class="d-flex justify-content-between mb-3">
      <p class="h4">Income List</p>
      @can('thisIsAdmin')
        <a href="/income/create/"><button type="button" class="btn btn-outline-primary">Create</button></a>
      @endcan
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="data-table">
          <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Source</th>
                <th scope="col">Date</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
          </thead>
          <tbody>
          </tbody>
      </table>
    </div>
  </div>   

<script type="text/javascript">
  $(document).ready(function () {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    let user = "{!! $user  !!}";

    let table = $('#data-table').DataTable({
      processing: true,
      serverSide: true,
      responsive: true,
      ajax: "{{ route('income.index') }}",
      columns: [
        {
          data: 'DT_RowIndex', 
          name: 'DT_RowIndex' , 
          orderable: false, 
          searchable: false
        },
        {
          data: 'transaction_name', 
          name: 'transaction_name'
        },
        {
          data: 'source', 
          name: 'source'
        },   
        {
          data: 'date', 
          name: 'date'
        },
        {
          data: 'total', 
          name: 'total'
        },
        {
          data: 'status', 
          name: 'status'
        },   
        {
          data: 'action', 
          name: 'action', 
          orderable: false, 
          searchable: false, 
          // visible: user === "owner" ? false : true
        },  
      ],
    });

    $('body').on('click', '.show-alert-delete-box', function (event){
      let form =  $(this).closest("form");
      event.preventDefault();
      swal({
          title: "Are you sure you want to delete this income?",
          text: "If you delete this, it will be gone forever.",
          icon: "warning",
          type: "warning",
          buttons: ["Cancel","Yes!"],
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
      }).then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
      });
    });
  });
</script>
@endsection