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
                    <h2>Librarian Information</h2>
                </div>
                <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/librarians/create'" style="float: left;">Create New</button>
                <table class="table mt-4">
                    <thead class="thead-light">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>POB</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <!-- <th>User Name</th>
                        <th>User Password</th> -->
                        <th>Actions</th>
                    </thead>
                    @foreach ($data as $librarian)
                    <tr>
                        <td>{{$librarian->id}}</td>
                        <td>{{$librarian->name}}</td>
                        <td>{{$librarian->gender}}</td>
                        <td>{{$librarian->dob}}</td>
                        <td>{{$librarian->pob}}</td>
                        <td>{{$librarian->address}}</td>
                        <td>{{$librarian->phone}}</td>
                        <td>{{$librarian->email}}</td>
                        <td>
                            <img src="{{ asset('storage/images/'.$librarian->photo) }}" style="width: 50px; height: 50px; object-fit: cover;" />
                        </td>
                        <!-- <td>{{$librarian->user_name}}</td>
                        <td>{{$librarian->user_password}}</td> -->
                        <td>
                            <a href="/librarians/{{ $librarian->id}}" class="border border-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <a href="/librarians/{{ $librarian->id}}/edit" class="border border-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{url('/library_librarian/delete', $librarian->id)}}" class="border border-primary btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
</body>

</html>