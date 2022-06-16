<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>

<body id="page-top">
    <div id="wrapper">
        @include('sidbar')
        <div id="content-wrapper" class="d-flex flex-column">
            @include('main')
            <div class="container">
                <h2>Librarian Information</h2>
                <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/librarians/create'"><i class="fa-solid fa-circle-plus"></i></button>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-2">ID</dt>
                        <dd class="col-sm-10">: {{$librarian->id}}</dd>
                        <dt class="col-sm-2">Name</dt>
                        <dd class="col-sm-10">: {{$librarian->name}}</dd>
                        <dt class="col-sm-2">Gender</dt>
                        <dd class="col-sm-10">: {{$librarian->gender}}</dd>
                        <dt class="col-sm-2">DOB</dt>
                        <dd class="col-sm-10">: {{$librarian->dob}}</dd>
                        <dt class="col-sm-2">POB</dt>
                        <dd class="col-sm-10">:{{$librarian->pob}}</dd>
                        <dt class="col-sm-2">Address</dt>
                        <dd class="col-sm-10">: {{$librarian->address}}</dd>
                        <dt class="col-sm-2">Phone</dt>
                        <dd class="col-sm-10">: {{$librarian->phone}}</dd>
                        <dt class="col-sm-2">Email</dt>
                        <dd class="col-sm-10">: {{$librarian->email}}</dd>
                        <dt class="col-sm-2">Photo</dt>
                        <dd class="col-sm-10">:
                            <img src="{{ asset('storage/images/'.$librarian->photo) }}" style="width: 50px; height: 50px; object-fit: cover;" />
                        </dd>
                        <dt class="col-sm-2">User Name</dt>
                        <dd class="col-sm-10">: {{$librarian->user_name}}</dd>
                        <dt class="col-sm-2">User Password</dt>
                        <dd class="col-sm-10">: {{$librarian->user_password}}</dd>
                    </dl>
                </div>
                <a href="{{route('librarians.edit',$librarian->id) }}" class="btn btn-warning rounded-left"><i class="fa-solid fa-pen-to-square"></i></a>

                <a href="{{route('librarians.index') }}" class="btn btn-secondary rounded-right"><i class="fa-solid fa-house"></i></a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>