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
                <form action="{{ route('booktypes.update',$booktype->id)}}" method="POST" class="row justify-content-center">
                    @csrf
                    @method("PUT")
                    <div class="col-lg-10">
                        <div class="m-2">
                            <div class="form-group">
                                <label for="typename">BookType Name</label>
                                <input class="form-control" type="text" placeholder="Enter typename" name="typename" id="typename" value="{{$booktype->typename}}" />
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input class="form-control" type="text" placeholder="Enter description" name="description" id="description" value="{{$booktype->description}}" />
                            </div>
                        </div>
                        <div class="m-2 ">
                            <input class="btn btn-warning" type="submit" value="Update">
                            <a class="btn btn-info" href="/booktypes"><i class="fa-solid fa-house"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>