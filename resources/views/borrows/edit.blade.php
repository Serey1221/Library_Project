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
                <form action="{{ route('borrows.update',$borrow->id)}}" method="POST" class="row justify-content-center">
                    @csrf
                    @method("PUT")
                    <div class="col-lg-6">
                        <div class="m-2">
                            <div class="form-group ">
                                <label class="" for="stu_id">Stu ID</label>
                                <input class="form-control" type="text" placeholder="Enter stu_id" name="stu_id" id="stu_id" value="{{$borrow->stu_id}}" />
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label class="" for="librarian_id">Librarian_id ID</label>
                                <input class="form-control" type="text" placeholder="Enter librarian_id" name="librarian_id" id="librarian_id" value="{{ $borrow->librarian_id }}" />
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label class="" for="book_id">Book ID</label>
                                <input class="form-control" type="book_id" placeholder="Enter book_id" name="book_id" id="book_id" value="{{$borrow->book_id}}" />
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="borrow_date">Borrow Date</label>
                                <input class="form-control" type="text" placeholder="borrow_date " name="borrow_date" id="borrow_date" value="{{$borrow->borrow_date}}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="m-2">
                            <div class="form-group">
                                <label for="return_date">Return Date</label>
                                <input class="form-control" type="text" placeholder="Enter return_date" name="return_date" id="return_date" value="{{$borrow->return_date}}" />
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="remark">Remark</label>
                                <input class="form-control" type="text" placeholder="Enter remark" name="remark" id="remark" value="{{$borrow->remark}}" />
                            </div>
                        </div>
                        <div class="m-2 ">
                            <input class="btn btn-warning" type="submit" value="Update">
                            <a class="btn btn-info" href="/borrows"><i class="fa-solid fa-house"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>