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
                    <form action="{{ route('bookauthors.update',$bookauthor->id)}}" method="POST" class="row justify-content-center">
                    @csrf
                    @method("PUT")
                    <div class="col-lg-6">
                    <div class="m-2">
                        <div class="form-group ">
                            <label class="" for="name">Author_id</label>
                            <input class="form-control" type="text" placeholder="Enter name" 
                                name="name" id="name" value="{{$bookauthor->name}}"/>
                        </div>
                    </div>
                    <div class="m-2">
                        <div class="form-group">
                            <label class="" for="gender">Author_date</label>
                            <input class="form-control" type="text" placeholder="Enter gender" 
                                name="gender" id="gender" value="{{ $bookauthor->gender }}" />
                        </div>
                    </div>
                    <div class="m-2">
                        <div class="form-group">
                            <label class="" for="dob"></label>Remark
                            <input class="form-control" type="dob" placeholder="Enter dob" 
                                name="dob" id="dob" value="{{$bookauthor->dob}}" />
                        </div>
                    </div>
            </div>
                <div class="m-2 ">
                            <input class="btn btn-warning" type="submit" value="Update">
                            <a class="btn btn-info" href="/bookauthors">Back</a>
                        </div>
        </form> 
    </div>
            </div>
        </div>
    </div>
</body>
</html>

