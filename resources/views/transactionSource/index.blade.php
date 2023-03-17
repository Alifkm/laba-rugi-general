@extends('layouts/app')

@section('content')
  <div class="container">
    <div class="d-flex justify-content-between mb-3">
      <p class="h4">Transaction Source List</p>
      @can('thisIsAdmin')  
        <a href="/transaction-source/create/"><button type="button" class="btn btn-outline-primary">Create</button></a>
      @endcan
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="data-table">
          <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Profit Loss Component</th>
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
    
    let user = "{!! $user !!}";
     
    let table = $('#data-table').DataTable({
      processing: true,
      serverSide: true,
      responsive: true,
      ajax: "{{ route('transactionSource.index') }}",
      columns: [
        {
          data: 'DT_RowIndex', 
          name: 'DT_RowIndex' , 
          orderable: false, 
          searchable: false
        },
        {
          data: 'transaction_source_name', 
          name: 'transaction_source_name'
        },
        {
          data: 'type', 
          name: 'type'
        },
        {
          data: 'profit_loss_component', 
          name: 'profit_loss_component'
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

    $('body').on('click', '.delete', function (event){
        event.preventDefault();
        swal({
            title: "Are you sure you want to delete this transaction source?",
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

              console.log(id);

              $.ajax({
                // type:"DELETE",
                url: "transaction-source/"+id,
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
                  swal("Success!", "transaction source " + name + " deleted successfully!", "success");
                  $('#data-table').DataTable().ajax.reload();
                }
              });
            }
        });
    });
  });
</script>
@endsection