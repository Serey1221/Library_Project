<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
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
                            <input class="form-control" type="text" placeholder="Enter photo" 
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
</body>
</html>

