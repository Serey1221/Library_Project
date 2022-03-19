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
                    <form action="/books" method="POST" class="row justify-content-center" enctype="multipart/form-data">
                        <div class="col-lg-6">
                            @csrf
                            <div class="m-2">
                                <div class="form-group ">
                                    <label  for="title">Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror" type="text" 
                                    placeholder="Enter title" 
                                        name="title" id="title" value="{{ old('title') }}" />
                                        @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror 
                                        
                                </div>
                            </div>
                            <div class="m-2">
                                <div class="form-group">
                                    <label  for="publish_date">Publish Date</label>
                                    <input class="form-control" type="text" placeholder="Enter publish_date" 
                                        name="publish_date" id="publish_date" value="{{ old('publish_date') }}" />
                                        @error('publish_date')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="m-2">
                                <div class="form-group">
                                    <label  for="num_of_pages">Number Of Pages</label>
                                    <input class="form-control" type="num_of_pages" placeholder="Enter num_of_pages" 
                                        name="num_of_pages" id="num_of_pages" value="{{ old('num_of_pages') }}" />
                                        @error('num_of_pages')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="m-2">
                                <div class="form-group">
                                    <label  for="num_copies">Number Of Copies</label>
                                    <input class="form-control" type="text" placeholder="Enter num_copies " 
                                        name="num_copies" id="num_copies" value="{{ old('num_copies') }}" />
                                        @error('num_copies')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="m-2">
                                <div class="form-group">
                                    <label  for="edition">Edition</label>
                                    <input class="form-control" type="text" placeholder="Enter edition" 
                                        name="edition" id="edition" value="{{ old('edition') }}" />
                                        @error('edition')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="m-2">
                                <div class="form-group">
                                    <label  for="publisher">Publisher</label>
                                    <input class="form-control" type="text" placeholder="Enter publisher" 
                                        name="publisher" id="publisher" value="{{ old('publisher') }}" ></input>
                                        @error('publisher')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="m-2">
                                <div class="form-group">
                                    <label  for="booksource">BookSource</label>
                                    <input class="form-control" type="text" placeholder="Enter booksource" 
                                        name="booksource" id="booksource" value="{{ old('booksource') }}" />
                                        @error('booksource')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="m-2">
                                <div class="form-group">
                                    <label  for="booktype_id">BookTypeID</label>
                                    <input class="form-control" type="text" placeholder="Enter booktype_id" 
                                        name="booktype_id" id="booktype_id" value="{{ old('booktypr_id') }}" />
                                        @error('booktypr_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="m-2">
                                <div class="form-group">
                                    <label  for="remark">Remark</label>
                                    <input class="form-control" type="text" placeholder="Enter remark" 
                                        name="remark" id="remark" value="{{ old('remark') }}" />
                                        @error('remark')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                                <div class="m-2">
                                    <input class="btn btn-success" type="submit" value="Create">
                                    <a class="btn btn-info" href="/books">Back</a>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>