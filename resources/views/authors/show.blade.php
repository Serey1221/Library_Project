<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="card m-2">
            <nav class="navbar" style="background-color: #f5f5f5; ">
            <h2>Information Car</h2>
            <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/authors/create'" style="float: right;">Create New</button>
            </nav>
            <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-2">ID</dt>
                            <dd class="col-sm-10">: {{$author->id}}</dd>
                        <dt class="col-sm-2">Name</dt>
                            <dd class="col-sm-10">: {{$author->name}}</dd>
                        <dt class="col-sm-2">Gender</dt>
                            <dd class="col-sm-10">: {{$author->gender}}</dd>
                        <dt class="col-sm-2">DOB</dt>
                            <dd class="col-sm-10">: {{$author->dob}}</dd>
                        <dt class="col-sm-2">POB</dt>
                            <dd class="col-sm-10">:{{$author->pob}}</dd>
                        <dt class="col-sm-2">Address</dt>
                            <dd class="col-sm-10">: {{$author->address}}</dd>
                        <dt class="col-sm-2">Phone</dt>
                            <dd class="col-sm-10">: {{$author->phone}}</dd>
                        <dt class="col-sm-2">Email</dt>
                            <dd class="col-sm-10">: {{$author->email}}</dd>
                        <dt class="col-sm-2">Photo</dt>
                            <dd class="col-sm-10">: {{$author->photo}}</dd>
                    </dl>
            </div>
            <div>
                <a href="{{route('authors.edit',$author->id) }}" class="btn btn-warning rounded-left">Update</a>

                <a href="{{route('authors.index') }}" class="btn btn-secondary rounded-right">Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>