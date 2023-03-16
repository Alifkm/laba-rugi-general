<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> 
  <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>  --}}


  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Create Datatable</title>
</head>
<body>
  <div class="container d-flex flex-column bg-light">
    <div>
        <h1 class="mb-5">Edit user</h1>
    </div>
    <div>
        <form method="POST" action="/user/{{ $user->id }}" autocomplete="off">
            @csrf
            @method('PUT')
            <div class="mb-3 w-25">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 w-25">
                <label for="email" class="form-label">Email address</label>
                <input type="text" name="email" class="form-control" id="email" value="{{ $user->email }}">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 w-25">
                <label for="password" class="form-label">Password</label>
                <input type="password" data-toggle="password"
                data-eye-class="material-icons"
                data-eye-open-class="visibility"
                data-eye-close-class="visibility_off"
                data-eye-class-position-inside="true" name="password" class="form-control" id="password" value="{{ $user->password }}">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 w-25">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" data-toggle="password"
                data-eye-class="material-icons"
                data-eye-open-class="visibility"
                data-eye-close-class="visibility_off"
                data-eye-class-position-inside="true" name="confirmPassword" class="form-control" id="confirmPassword" value="{{ $user->password }}">
                @error('confirmPassword')
                    <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
                <a href="/user"><button type="button" class="btn btn-outline-danger mx-2">Cancel</button></a>
            </div>
        </form>
    </div>
</div>   

<script src="//unpkg.com/alpinejs" defer></script>
<script type="text/javascript">

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
                    // dataType: 'json',
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
  // });
</script>
</body>
</html>