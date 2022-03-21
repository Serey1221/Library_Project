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
                    <form action="{{ route('authors.update',$author->id)}}" method="POST" class="row justify-content-center">
                    @csrf
                    @method("PUT")
                    <div class="col-lg-6">
                    <div class="m-2">
                        <div class="form-group ">
                            <label class="" for="name">Name</label>
                            <input class="form-control" type="text" placeholder="Enter name" 
                                name="name" id="name" value="{{$author->name}}"/>
                        </div>
                    </div>
                    <div class="m-2">
                        <div class="form-group">
                            <label class="" for="gender">Gender</label>
                            <input class="form-control" type="text" placeholder="Enter gender" 
                                name="gender" id="gender" value="{{ $author->gender }}" />
                        </div>
                    </div>
                    <div class="m-2">
                        <div class="form-group">
                            <label class="" for="dob">Date of Birth</label>
                            <input class="form-control" type="dob" placeholder="Enter dob" 
                                name="dob" id="dob" value="{{$author->dob}}" />
                        </div>
                    </div>
                    <div class="m-2">
                        <div class="form-group">
                            <label  for="pob">POD</label>
                            <input class="form-control" type="text" placeholder="pob by" 
                                name="pob" id="pob" value="{{$author->pob}}"/>
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                    <div class="m-2">
                        <div class="form-group">
                            <label  for="address">Address</label>
                            <input class="form-control" type="text" placeholder="Enter address" 
                                name="address" id="address" value="{{$author->address}}" />
                        </div>
                    </div>
                    <div class="m-2">
                        <div class="form-group">
                            <label  for="phone">Phone</label>
                            <input class="form-control" type="text" placeholder="Enter phone" 
                                name="phone" id="phone" value="{{$author->phone}}" ></input>
                        </div>
                    </div>
                    <div class="m-2">
                        <div class="form-group">
                            <label  for="email">Email</label>
                            <input class="form-control" type="text" placeholder="Enter email" 
                                name="email" id="email" value="{{$author->email}}" />
                        </div>
                    </div>
                    <div class="m-2">
                        <div class="form-group">
                            <label  for="photo">Photo</label>
                            <input type="file" placeholder="Enter photo" 
                                name="photo" id="photo" value="{{$author->photo}}" />
                        </div>
                    </div>
                        <div class="m-2 ">
                            <input class="btn btn-warning" type="submit" value="Update">
                            <a class="btn btn-info" href="/authors">Back</a>
                        </div>
                </div>
        </form> 
    </div>
            </div>
        </div>
    </div>
</body>
</html>

