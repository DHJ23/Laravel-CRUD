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
    <!-- container Start-->
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
                        <table class="table table-bordered-responsive table-striped ">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Fuel Capacity</th>
                                    <th>Millage</th>
                                    <th>Distance</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vehical as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->fuel_capacity}}</td>
                                    <td>{{$item->millage}}</td>
                                    <td>{{$item->millage / $item->fuel_capacity }} KM</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#UpdatevehicalModal{{$item->id}}">Update</button>
                                        <!-- Modal Strat -->
                                            <div class="modal fade" id="UpdatevehicalModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Update School Data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form class="row g-3 needs-validation"  action="{{ route('vehical.update',$item->id) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="validationCustom01" class="form-label">Vehical Name</label>
                                                                <input type="text" class="form-control" id="validationCustom01"  value="{{$item->name}}" name="name" placeholder="Enter Vehical Name" required>
                                                                <div class="invalid-feedback">
                                                                    Please Provide Vehical Name
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="validationCustom01" class="form-label">Vehical Price</label>
                                                                <input type="text" class="form-control" id="validationCustom01"  value="{{$item->price}}" name="price" placeholder="Enter Vehical Name" required>
                                                                <div class="invalid-feedback">
                                                                    Please Provide Vehical Price
                                                                </div>
                                                            </div> 
                                                            <div class="mb-3">
                                                                <label for="validationCustom01" class="form-label">Fuel Capacity</label>
                                                                <input type="text" class="form-control"  value="{{$item->fuel_capacity}}" id="validationCustom04" name="fuel_capacity" placeholder="Enter Fuel Capacity" required>
                                                                <div class="invalid-feedback">
                                                                    Please Provide Fuel Capacity
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="validationCustom01" class="form-label">Millage</label>
                                                                <input type="text" class="form-control"  value="{{$item->millage}}" id="validationCustom02" name="millage" placeholder="Enter Millage" required>
                                                                <div class="invalid-feedback">
                                                                    Please Provide Millage
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                        <!-- Modal End -->
                                        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#Delete{{$item->id}}">Delete</button>
                                            <!--Model Start-->   
                                            <div class="modal fade" id="Delete{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Are want to sure delete this?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                        </div>
                                                        <form action="{{ route('vehical.destroy',$item->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Delete</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <!--Model end-->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div align="center"><a href="{{url('')}}" class="link-secondary" role="button">Back to pervious Page</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- container End-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>