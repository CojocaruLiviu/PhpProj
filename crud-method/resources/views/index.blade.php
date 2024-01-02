<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<h1>List with Products</h1>
{{--ButtonToAdd--}}
<div>
    <div class="bd-example">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddModal">
            Click to add
        </button>
    </div>
</div>

<!-- Modal page Add -->
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="AddModalLabel">Add Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{route('product.store')}}">
                <div class="modal-body">
                        @csrf
                        <input type="name" name="name" id="name" placeholder="Name" class="form-control"><br>
                        <input type="age" name="age" id="age" placeholder="Count" class="form-control"><br>
                        <textarea name="about" id="about" class="form-control" placeholder="About" cols="30" rows="10"></textarea><br>
                </div>
                <div class="modal-footer">
                     <a href="/"> <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Table--}}
<br>
<div class="container">
    <table border="1" class="table ">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Count</td>
            <td>About</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>

        @foreach($product as $el)
            <tr>
                <td>{{$el->id}}</td>
                <td>{{$el->name}}</td>
                <td>{{$el->age}}</td>
                <td>{{$el->about}}</td>
                <td>
                    <!-- Button to trigger the modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditModal{{ $el->id }}">
                        Edit
                    </button>
                </td>
                <td>

                    <button type="submit" class="btn btn-primary" value="delete" data-bs-toggle="modal" data-bs-target="#DelModal{{ $el->id }}">
                        Delete
                    </button>
                </td>
            </tr>

            <!-- Edit Modal product -->
            <div class="modal fade" id="EditModal{{ $el->id }}" tabindex="-1" aria-labelledby="EditModalLabel{{ $el->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="EditModalLabel{{ $el->id }}">Edit Product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" action="{{ route('product.update', ['product' => $el->id]) }}">
                                @csrf
                                @method('put')
                            <div class="modal-body">
                                <input type="name" name="name" id="name" placeholder="Name" class="form-control" value="{{ $el->name }}"><br>
                                <input type="age" name="age" id="age" placeholder="Count" class="form-control" value="{{ $el->age }}"><br>
                                <textarea name="about" id="about" class="form-control" placeholder="About" cols="30" rows="10">{{ $el->about }}</textarea><br>
                            </div>
                            <div class="modal-footer">
                              <a href="/">  <button type="button" class="btn btn-secondary">Close</button></a>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete Modal product -->
            <div class="modal fade" id="DelModal{{ $el->id }}" tabindex="-1" aria-labelledby="DelModalLabel{{ $el->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="DelModalLabel{{ $el->id }}">Delete Product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" action="{{ route('product.destroy', ['product' => $el->id]) }}">
                                @csrf
                                @method('delete')
                            <div class="modal-body">
                                <h2>Are u sure want to delete element with id {{$el->id}} ?</h2>
                            </div>
                            <div class="modal-footer">
                                <a href="/">  <button type="button" class="btn btn-secondary">Close</button></a>
                                <button type="submit" value="delete" class="btn btn-primary">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </table>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

@if(Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}");
    </script>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            toastr.error("{{ $error }}");
        </script>
    @endforeach
@endif
</body>
</html>
