@extends('layouts/app')

@section('content')
  <div id="overlay">
    <div class="cv-spinner">
      <span class="spinner"></span>
    </div>
  </div>
  <div class="container py-5">
    <div class="d-flex justify-content-around mb-3">
      @if (session()->has('message'))
      <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="alert alert-success">
          {{ session('message') }}
      </div>
      @elseif (session()->has('error'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show" class="alert alert-danger">
            {{ session('error') }}
        </div>
      @endif
      <p class="h4">User List</p>
      <a href="/user/create/"><button type="button" class="btn btn-outline-primary">Create</button></a>
  </div>
    <table class="table table-bordered table-striped" id="data-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th width="100px">Action</th>               
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>   


{{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
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
        ajax: "{{ route('user.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},       
            {data: 'action', name: 'action', orderable: false, searchable: false},  
        ]
    });

    $('body').on('click', '.delete', function (event){
            // let form =  $(this).closest("form");
            // let name = $(this).data("name");
            // console.log(name);
            event.preventDefault();
            swal({
                title: "Are you sure you want to delete this user?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                type: "warning",
                buttons: ["Cancel","Yes!"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    // form.submit();
                  let id = $(this).attr('id').split(" ")[0];
                  let tempName = $(this).attr('id').split(" ");
                  tempName.shift();
                  let name = tempName.join(" ");
                  // console.log(name);

                  $.ajax({
                    // type:"DELETE",
                    url: "user/"+id,
                    data: { id: id },
                    error: function(err) {
                      console.log(err);
                    },
                    beforeSend: function() {
                      $("#overlay").fadeIn(300);
                    },
                    success: function(res){
                      setTimeout(function(){  
                        $("#overlay").fadeOut(300);
                      },500);
                      swal("Success!", "user " + name + " deleted successfully!", "success");
                      $('#data-table').DataTable().ajax.reload();
                    }
                  });
                }
            });
        });
  });
</script>
@endsection