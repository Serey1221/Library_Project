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
                    <h2>Book Information </h2>
                </div>
                <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/books/create'" style="float: left;">Create New</button>
                <table class="table mt-4">
                    <thead class="thead-light">
                        <th>ID</th>
                        <th>Titel</th>
                        <!-- <th>Pub Date</th> -->
                        <th>Num Of Pages</th>
                        <th>Num Of Copies</th>
                        <th>Edition</th>
                        <th>Publisher</th>
                        <th>B_Source</th>
                        <th>B_Type_ID</th>
                        <th>Remark</th>
                        <th>Actions</th>
                    </thead>
                    @foreach ($data as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->title}}</td>
                        <!-- <td>{{$book->publish_date}}</td> -->
                        <td>{{$book->num_of_pages}}</td>
                        <td>{{$book->num_copies}}</td>
                        <td>{{$book->edition}}</td>
                        <td>{{$book->publisher}}</td>
                        <td>{{$book->booksource}}</td>
                        <td>{{$book->booktype_id}}</td>
                        <td>{{$book->remark}}</td>
                        <td>
                            <a href="/books/{{ $book->id}}" class="border border-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <a href="/books/{{ $book->id}}/edit" class="border border-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{url('/library/delete', $book->id)}}" class="border border-primary btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
</body>

</html>