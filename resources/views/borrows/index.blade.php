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
                    <h2>Book Borrowing Information</h2>
                </div>
                <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/borrows/create'" style="float: left;">Create New</button>
                <table class="table mt-4">
                    <thead class="thead-light">
                        <th>ID</th>
                        <th>Stu ID</th>
                        <th>Librar ID</th>
                        <th>Book ID</th>
                        <th>Borrow Date</th>
                        <th>Return Date</th>
                        <th>Remark</th>
                        <th>Actions</th>
                    </thead>
                    @foreach ($data as $borrow)
                    <tr>
                        <td>{{$borrow->id}}</td>
                        <td>{{$borrow->stu_id}}</td>
                        <td>{{$borrow->librarian_id}}</td>
                        <td>{{$borrow->book_id}}</td>
                        <td>{{$borrow->borrow_date}}</td>
                        <td>{{$borrow->return_date}}</td>
                        <td>{{$borrow->remark}}</td>
                        <td>
                            <a href="/borrows/{{ $borrow->id}}" class="border border-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <a href="/borrows/{{ $borrow->id}}/edit" class="border border-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{url('/library/delete', $borrow->id)}}" class="border border-primary btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
</body>

</html>