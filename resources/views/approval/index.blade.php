@extends('layouts/app')

@section('content')
  <div class="container">
    <div class="d-flex justify-content-between mb-3">
      <p class="h4">Approval List</p>
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
              <th scope="col">Transaction Type</th>
              <th scope="col">Approval Type</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
      </table>
    </div>
  </div>  


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      
      let table = $('#data-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ route('approval.index') }}",
        columns: [
          {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
          {data: 'transaction_name', name: 'transaction_name'},
          {data: 'source', name: 'source'},   
          {data: 'date', name: 'date'},
          {data: 'total', name: 'total'},
          {data: 'transaction_type', name: 'transaction_type'},
          {data: 'approval_type', name: 'approval_type'},   
          {data: 'action', name: 'action', orderable: false, searchable: false},  
        ],
      });

      
      $('body').on('click', '.show-alert-approve-box', function (event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
          title: "Are you sure you want to APPROVE this entry?",
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

        $('body').on('click', '.show-alert-delete-box', function (event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: "Are you sure to NOT APPROVE this transaction?",
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