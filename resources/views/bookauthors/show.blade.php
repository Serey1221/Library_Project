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
                    <h2>Information Authors</h2>
                    <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/bookauthors/create'" >Create New</button>
                    <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2">ID</dt>
                                    <dd class="col-sm-10">: {{$bookauthor->id}}</dd>
                                <dt class="col-sm-2">AUTHOR_ID</dt>
                                    <dd class="col-sm-10">: {{$bookauthor->author_id}}</dd>
                                <dt class="col-sm-2">AUHTOR_DATE</dt>
                                    <dd class="col-sm-10">: {{$bookauthor->author_date}}</dd>
                                <dt class="col-sm-2">REMARK</dt>
                                    <dd class="col-sm-10">: {{$bookauthor->remark}}</dd>
                            </dl>
                    </div>
                        <a href="{{route('bookauthors.edit',$bookauthor->id) }}" class="btn btn-warning rounded-left">Update</a>

                        <a href="{{route('bookauthors.index') }}" class="btn btn-secondary rounded-right">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>