<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>

<body id="page-top">
    <div id="wrapper">
        @include('sidbar')
        <div id="content-wrapper" class="d-flex flex-column">


            @include('main')
            <div class="container-fluid mt-5">
                <div class="">
                    <h2> Booktype information</h2>
                </div>
                <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/booktypes/create'" style="float: left;">Create New</button>
                <table class="table mt-4">
                    <thead class="thead-light">
                        <th>ID</th>
                        <th>Booktype Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </thead>
                    @foreach ($data as $booktype)
                    <tr>
                        <td>{{$booktype->id}}</td>
                        <td>{{$booktype->typename}}</td>
                        <td>{{$booktype->description}}</td>
                        <td>
                            <a href="/booktypes/{{ $booktype->id}}" class="border border-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <a href="/booktypes/{{ $booktype->id}}/edit" class="border border-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{url('/library/delete', $booktype->id)}}" class="border border-primary btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
</body>

</html>