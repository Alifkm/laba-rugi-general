@extends('layouts/app')

@section('content')
  <div class="container">
    <div class="d-flex justify-content-between mb-3">
      <p class="h4">Admin List</p>
      @can('thisIsSuperAdmin')
        <a href="/admin/create/"><button type="button" class="btn btn-outline-primary">Create</button></a>
      @endcan
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="data-table">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th width="100px">Action</th>               
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
        ajax: "{{ route('admin.index') }}",
        columns: [
          {
            data: 'DT_RowIndex', 
            name: 'DT_RowIndex' , 
            orderable: false, 
            searchable: false
          },
          {
            data: 'name', 
            name: 'name'
          },
          {
            data: 'email', 
            name: 'email'
          },   
          {
            data: 'phone', 
            name: 'phone'
          },    
          {
            data: 'action', 
            name: 'action', 
            orderable: false, 
            searchable: false, 
            visible: user === "superAdmin" ? true : false 
          }     
        ],
    });

    $('body').on('click', '.delete', function (event){
            // let form =  $(this).closest("form");
            // let name = $(this).data("name");
            // console.log(name);
            event.preventDefault();
            swal({
                title: "Are you sure you want to delete this admin?",
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

                  $.ajax({
                    // type:"DELETE",
                    url: "admin/"+id,
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
                      swal("Success!", "admin " + name + " deleted successfully!", "success");
                      $('#data-table').DataTable().ajax.reload();
                    }
                  });
                }
            });
        });
  });
</script>
@endsection