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
        <form action="/authors" method="POST" class="row justify-content-center">
            <div class="col-lg-6">
                @csrf
                <div class="m-2">
                    <div class="form-group ">
                        <label  for="name">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" 
                        placeholder="Enter name" 
                            name="name" id="name" value="{{ old('name') }}" />
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror 
                            
                    </div>
                </div>
                <div class="m-2">
                    <div class="form-group">
                        <label  for="gender">Gender</label>
                        <input class="form-control" type="text" placeholder="Enter Gender" 
                            name="gender" id="gender" value="{{ old('gender') }}" />
                            @error('gender')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                </div>
                <div class="m-2">
                    <div class="form-group">
                        <label  for="dob">Date of Birth</label>
                        <input class="form-control" type="dob" placeholder="Enter dob" 
                            name="dob" id="dob" value="{{ old('dob') }}" />
                            @error('dob')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                </div>
                <div class="m-2">
                    <div class="form-group">
                        <label  for="pob">POB</label>
                        <input class="form-control" type="text" placeholder="Enter pob " 
                            name="pob" id="pob" value="{{ old('pob') }}" />
                            @error('pob')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="m-2">
                    <div class="form-group">
                        <label  for="address">Address</label>
                        <input class="form-control" type="text" placeholder="Enter address" 
                            name="address" id="address" value="{{ old('address') }}" />
                            @error('address')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                </div>
                <div class="m-2">
                    <div class="form-group">
                        <label  for="phone">Phone</label>
                        <input class="form-control" type="text" placeholder="Enter phone" 
                            name="phone" id="phone" value="{{ old('phone') }}" ></input>
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                </div>
                <div class="m-2">
                    <div class="form-group">
                        <label  for="email">Email</label>
                        <input class="form-control" type="text" placeholder="Enter email" 
                            name="email" id="email" value="{{ old('email') }}" />
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                </div>
                <div class="m-2">
                    <div class="form-group">
                        <label  for="photo">Photo</label>
                        <input class="form-control" type="text" placeholder="Enter photo" 
                            name="photo" id="photo" value="{{ old('photo') }}" />
                            @error('photo')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                </div>
                    <div class="m-2">
                        <input class="btn btn-success" type="submit" value="Create">
                        <a class="btn btn-info" href="/authors">Back</a>
                    </div>
            </div>
        </form>
    </div>
</body>
</html>