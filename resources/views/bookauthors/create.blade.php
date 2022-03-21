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
                    <form action="/bookauthors" method="POST" class="row ">
                        <div class="col-lg-12">
                            @csrf
                            <div class="m-2">
                                <div class="form-group ">
                                    <label  for="author_id">Author_id</label>
                                    <input class="form-control" type="text" 
                                    placeholder="Enter author_id" 
                                        author_id="author_id" id="author_id" value="{{ old('author_id') }}" />
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror 
                                        
                                </div>
                            </div>
                            <div class="m-2">
                                <div class="form-group">
                                    <label  for="author_date">Author_date</label>
                                    <input class="form-control" type="text" placeholder="Enter author_date" 
                                        name="author_date" id="author_date" value="{{ old('author_date') }}" />
                                        @error('author_date')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="m-2">
                                <div class="form-group">
                                    <label  for="remark">Remark</label>
                                    <input class="form-control" type="remark" placeholder="Enter remark" 
                                        name="remark" id="remark" value="{{ old('remark') }}" />
                                        @error('remark')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                                <div class="m-2">
                                    <input class="btn btn-success" type="submit" value="Create">
                                    <a class="btn btn-info" href="/bookauthors">Back</a>
                                </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>