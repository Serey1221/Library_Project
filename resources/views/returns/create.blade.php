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
                <form action="/returns" method="POST" class="row justify-content-center">
                    <div class="col-lg-6">
                        @csrf
                        <div class="m-2">
                            <div class="form-group ">
                                <label for="stu_id">Stu ID</label>
                                <input class="form-control " type="text" placeholder="Enter stu_id" name="stu_id" id="stu_id" value="{{ old('stu_id') }}" />
                                @error('stu_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror

                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="librarian_id">Librarian ID</label>
                                <input class="form-control" type="text" placeholder="Enter librarian_id" name="librarian_id" id="librarian_id" value="{{ old('librarian_id') }}" />
                                @error('librarian_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="book_id">Book ID</label>
                                <input class="form-control" type="book_id" placeholder="Enter book_id" name="book_id" id="book_id" value="{{ old('book_id') }}" />
                                @error('book_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="m-2">
                            <div class="form-group">
                                <label for="return_date">Return Date</label>
                                <input class="form-control" type="text" placeholder="Enter return_date" name="return_date" id="return_date" value="{{ old('return_date') }}" />
                                @error('return_date')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="remark">Remark</label>
                                <input class="form-control" type="text" placeholder="Enter remark" name="remark" id="remark" value="{{ old('remark') }}"></input>
                                @error('remark')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="m-2">
                            <input class="btn btn-success" type="submit" value="Create">
                            <a class="btn btn-info" href="/returns">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>