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
                <form action="{{ route('librarians.update',$librarian->id)}}" method="POST" class="row justify-content-center">
                    @csrf
                    @method("PUT")
                    <div class="col-lg-6">
                        <div class="m-2">
                            <div class="form-group ">
                                <label for="name">Name</label>
                                <input class="form-control " type="text" placeholder="Enter name" name="name" id="name" value="{{ $librarian->name }}" />
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror

                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <input class="form-control" type="text" placeholder="Enter gender" name="gender" id="gender" value="{{ $librarian->gender }}" />
                                @error('gender')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="dob">DOB</label>
                                <input class="form-control" type="dob" placeholder="Enter dob" name="dob" id="dob" value="{{ $librarian->dob }}" />
                                @error('dob')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="pob">POB</label>
                                <input class="form-control" type="text" placeholder="Enter pob " name="pob" id="pob" value="{{ $librarian->pob }}" />
                                @error('pob')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input class="form-control" type="text" placeholder="Enter address" name="address" id="address" value="{{ $librarian->address }}"></input>
                                @error('address')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input class="form-control" type="text" placeholder="Enter phone" name="phone" id="phone" value="{{$librarian->phone}}"></input>
                                @error('phone')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="m-2">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" placeholder="Enter email" name="email" id="email" value="{{$librarian->email  }}"></input>
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" placeholder="Enter photo" name="photo" id="photo" value="{{ $librarian->photo }}"></input>
                                @error('photo')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="user_name">User Name</label>
                                <input class="form-control" type="text" placeholder="Enter user_name" name="user_name" id="user_name" value="{{ $librarian->user_name }}"></input>
                                @error('user_name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="user_password">User Password</label>
                                <input class="form-control" type="text" placeholder="Enter user_password" name="user_password" id="user_password" value="{{ $librarian->user_password }}"></input>
                                @error('user_password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="m-2 ">
                            <input class="btn btn-warning" type="submit" value="Update">
                            <a class="btn btn-info" href="/librarians"><i class="fa-solid fa-house"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>