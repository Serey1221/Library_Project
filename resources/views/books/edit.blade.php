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
                <form action="{{ route('books.update',$book->id)}}" method="POST" class="row justify-content-center">
                    @csrf
                    @method("PUT")
                    <div class="col-lg-6">
                        <div class="m-2">
                            <div class="form-group ">
                                <label class="" for="title">Title</label>
                                <input class="form-control" type="text" placeholder="Enter title" title="title" id="title" value="{{$book->title}}" />
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label class="" for="publish_date">Publish Date</label>
                                <input class="form-control" type="text" placeholder="Enter publish_date" name="publish_date" id="publish_date" value="{{ $book->publish_date }}" />
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label class="" for="num_of_pages">Number Of Pages</label>
                                <input class="form-control" type="num_of_pages" placeholder="Enter num_of_pages" name="num_of_pages" id="num_of_pages" value="{{$book->num_of_pages}}" />
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="num_copies">Number Of Copies</label>
                                <input class="form-control" type="text" placeholder="num_copies by" name="num_copies" id="num_copies" value="{{$book->num_copies}}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="m-2">
                            <div class="form-group">
                                <label for="edition">Edition</label>
                                <input class="form-control" type="text" placeholder="Enter edition" name="edition" id="edition" value="{{$book->edition}}" />
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="publisher">Publisher</label>
                                <input class="form-control" type="text" placeholder="Enter publisher" name="publisher" id="publisher" value="{{$book->publisher}}"></input>
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="booksource">BookSource</label>
                                <input class="form-control" type="text" placeholder="Enter booksource" name="booksource" id="booksource" value="{{$book->booksource}}" />
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="booktype_id">Book Type ID</label>
                                <input class="form-control" type="text" placeholder="Enter booktype_id" name="booktype_id" id="booktype_id" value="{{$book->booktype_id}}" />
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="remark">Remark</label>
                                <input class="form-control" type="text" placeholder="Enter remark" name="remark" id="remark" value="{{$book->remark}}" />
                            </div>
                        </div>
                        <div class="m-2 ">
                            <input class="btn btn-warning" type="submit" value="Update">
                            <a class="btn btn-info" href="/books"><i class="fa-solid fa-house"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>