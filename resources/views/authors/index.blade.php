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

            <div class="container">
                <div class="">
                    <h2>Author Information </h2>

                </div>
                <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/authors/create'" style="float: left;">Create New</button>
                <table class="table mt-4">
                    <thead class="thead-light">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <!-- <th>DOB</th>
                            <th>POB</th> -->
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </thead>
                    @foreach ($data as $author)
                    <tr>
                        <td>{{$author->id}}</td>
                        <td>{{$author->name}}</td>
                        <td>{{$author->gender}}</td>
                        <!-- <td>{{$author->dob}}</td>
                            <td>{{$author->pob}}</td> -->
                        <td>{{$author->address}}</td>
                        <td>{{$author->phone}}</td>
                        <td>{{$author->email}}</td>
                        <td>
                            <img src="{{ asset('storage/images/'.$author->photo) }}" style="width: 50px; height: 50px; object-fit: cover;" />
                        </td>
                        <td>

                            <a href="/authors/{{ $author->id}}" class="border border-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <a href="/authors/{{ $author->id}}/edit" class="border border-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{url('/library_author/delete', $author->id)}}" class="border border-primary btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>

</html>