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
                <form action="/booktypes" method="POST" class="row justify-content-center">
                    <div class="col-lg-10">
                        @csrf
                        <div class="m-2">
                            <div class="form-group ">
                                <label for="typename">Booktypename</label>
                                <input class="form-control" type="text" placeholder="Enter typename" name="typename" id="typename" value="{{ old('typename') }}" />
                                @error('typename')
                                <span class="text-danger">{{$message}}</span>
                                @enderror

                            </div>
                        </div>
                        <div class="m-2">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input class="form-control" type="text" placeholder="Enter description" name="description" id="description" value="{{ old('description') }}" />
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="m-2">
                            <input class="btn btn-success" type="submit" value="Create">
                            <a class="btn btn-info" href="/booktypes">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>