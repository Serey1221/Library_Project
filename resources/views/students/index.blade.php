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
                    <h2>Student Information</h2>
                </div>
                <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/students/create'" style="float: left;">Create New</button>
                <table class="table mt-4">
                    <thead class="thead-light">
                        <th>ID</th>
                        <th>Stu Name</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>POB</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </thead>
                    @foreach ($data as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->stu_name}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->dob}}</td>
                        <td>{{$student->pob}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                            <img src="{{ asset('storage/images/'.$student->photo) }}" style="width: 50px; height: 50px; object-fit: cover;" />
                        </td>
                        <td>
                            <a href="/students/{{ $student->id}}" class="border border-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <a href="/students/{{ $student->id}}/edit" class="border border-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{url('/library/delete', $student->id)}}" class="border border-primary btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
</body>

</html>