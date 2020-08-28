<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('/css/min.css') }}" type="text/css"/>
	<script src="https://kit.fontawesome.com/75ee4c0d67.js" crossorigin="anonymous"></script>
</head>

<div class="container-fluid" style="display:block">
    <div class="row" style="display:inline">
        <a href="{{ route('home') }}" class="btn btn-secondary filter-button">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="row justify-content-center" style="display:inline">
        <h2 class="card-header w-100 m-1 text-center">Add Production</h2>
    </div>
    <div class="row justify-content-center">
        <form method="post" action="{{ route('addProduction') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name">
                </div>
            </div>

            <div class="form-group row">
                <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>
                <div class="col-md-6">
                    <input id="price" type="text" class="form-control" name="price">
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">Choose Image</label>
                <div class="col-md-6">
                    <input id="image" type="file" name="image">
                </div>
            </div>

            <div class="form-group row mb-0 mt-5">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-dark">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>