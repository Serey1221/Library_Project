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
                <h2>Information Book Type</h2>
                <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/booktypes/create'"><i class="fa-solid fa-circle-plus"></i></button>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-2">ID</dt>
                        <dd class="col-sm-10">: {{$booktype->id}}</dd>
                        <dt class="col-sm-2">BookType Name</dt>
                        <dd class="col-sm-10">: {{$booktype->typename}}</dd>
                        <dt class="col-sm-2">Description</dt>
                        <dd class="col-sm-10">: {{$booktype->description}}</dd>

                    </dl>
                </div>
                <a href="{{route('booktypes.edit',$booktype->id) }}" class="btn btn-warning rounded-left"><i class="fa-solid fa-pen-to-square"></i></a>

                <a href="{{route('booktypes.index') }}" class="btn btn-secondary rounded-right"><i class="fa-solid fa-house"></i></a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>