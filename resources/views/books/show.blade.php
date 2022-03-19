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
                    <h2>Information Book</h2>
                    <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/books/create'" >Create New</button>
                    <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2">ID</dt>
                                    <dd class="col-sm-10">: {{$book->id}}</dd>
                                <dt class="col-sm-2">Title</dt>
                                    <dd class="col-sm-10">: {{$book->title}}</dd>
                                <dt class="col-sm-2">Publish_Date</dt>
                                    <dd class="col-sm-10">: {{$book->publish_date}}</dd>
                                <dt class="col-sm-2">Number Of Pages</dt>
                                    <dd class="col-sm-10">: {{$book->num_of_pages}}</dd>
                                <dt class="col-sm-2">Number Of Copies</dt>
                                    <dd class="col-sm-10">:{{$book->num_copies}}</dd>
                                <dt class="col-sm-2">Edition</dt>
                                    <dd class="col-sm-10">: {{$book->edition}}</dd>
                                <dt class="col-sm-2">Publisher</dt>
                                    <dd class="col-sm-10">: {{$book->publisher}}</dd>
                                <dt class="col-sm-2">BookSource</dt>
                                    <dd class="col-sm-10">: {{$book->booksource}}</dd>
                                <dt class="col-sm-2">BookTypeID</dt>
                                    <dd class="col-sm-10">: {{$book->booktype_id}}</dd>
                                <dt class="col-sm-2">Remark</dt>
                                    <dd class="col-sm-10">: {{$book->remark}}</dd>
                            </dl>
                    </div>
                        <a href="{{route('books.edit',$book->id) }}" class="btn btn-warning rounded-left">Update</a>

                        <a href="{{route('books.index') }}" class="btn btn-secondary rounded-right">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>