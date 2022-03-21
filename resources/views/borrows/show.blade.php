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
                <h2>Book Borrowing Information</h2>
                <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/borrows/create'"><i class="fa-solid fa-circle-plus"></i></button>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-2">ID</dt>
                        <dd class="col-sm-10">: {{$borrow->id}}</dd>
                        <dt class="col-sm-2">Stu ID</dt>
                        <dd class="col-sm-10">: {{$borrow->stu_id}}</dd>
                        <dt class="col-sm-2">Librarian ID</dt>
                        <dd class="col-sm-10">: {{$borrow->librarian_id}}</dd>
                        <dt class="col-sm-2">Book ID</dt>
                        <dd class="col-sm-10">: {{$borrow->book_id}}</dd>
                        <dt class="col-sm-2">Borrow Date</dt>
                        <dd class="col-sm-10">:{{$borrow->borrow_date}}</dd>
                        <dt class="col-sm-2">Return Date</dt>
                        <dd class="col-sm-10">: {{$borrow->return_date}}</dd>
                        <dt class="col-sm-2">Remark</dt>
                        <dd class="col-sm-10">: {{$borrow->remark}}</dd>
                    </dl>
                </div>
                <a href="{{route('borrows.edit',$borrow->id) }}" class="btn btn-warning rounded-left"><i class="fa-solid fa-pen-to-square"></i></a>

                <a href="{{route('borrows.index') }}" class="btn btn-secondary rounded-right"><i class="fa-solid fa-house"></i></a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>