<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehical Mangement System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <!-- Row Start-->
        <div class="row">
            <!--Colume Strat-->
            <div class="col-md-12">
                @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif
                <!--Card-->
                <div class="card">
                    <!--card header-->
                    <div class="card-header">
                        <h4>Vehical Manegment System</h4>
                    </div>
                    <!--card body-->
                    <div class="card-body">
                        <div>
                            <div align="center"><h3><a href="#" data-bs-toggle="modal" data-bs-target="#AddVehicalModal" class="link-danger" role="button">Insert Vehical</a></h3></div>
                            <!-- Modal Strat -->
                            <div class="modal fade" id="AddVehicalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Vehical Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('vehical.store') }}" method="post">
                                        @csrf
                                    <div class="modal-body">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">Vehical Name</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Enter Vehical Name" required>
                                                <div class="invalid-feedback">
                                                    Please Provide Vehical Name
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">Vehical Price</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="price" placeholder="Enter Vehical Price" required>
                                                <div class="invalid-feedback">
                                                    Please Provide Vehical Price
                                                </div>
                                            </div> 
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">Fuel Capacity</label>
                                                <input type="text" class="form-control" id="validationCustom04" name="fuel_capacity" placeholder="Enter Fuel Capacity" required>
                                                <div class="invalid-feedback">
                                                    Please Provide Fuel Capacity
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">Millage</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="millage" placeholder="Enter Millage" required>
                                                <div class="invalid-feedback">
                                                    Please Provide Millage
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        <!-- Modal End -->
                            <div align="center"><h3><a href="{{url('display')}}" class="link-secondary" role="button">View Vehical</a></h3></div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>