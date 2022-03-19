
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body id="page-top">
    <div id="wrapper">
        @include('sidbar')
        <div id="content-wrapper" class="d-flex flex-column">
               @include('main')
                <div class="container">
                    <div class="navbar navbar-expand-lg">
                            <h2> Information Bookauthor</h2>
                    </div>
                    <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/bookauthors/create'" style="float: left;">Create New</button>
                    <table class="table mt-4">
                        <thead class="thead-light">
                            <th>ID</th>
                            <th>AUTHOR_ID</th>
                            <th>AUHTOR_DATE</th>
                            <th>REMARK</th>
                            <th>ACTIONS</th>
                        </thead>
                        @foreach ($data as $bookauthor)
                        <tr>
                            <td>{{$bookauthor->id}}</td>
                            <td>{{$bookauthor->author_id}}</td>
                            <td>{{$bookauthor->author_date}}</td>
                            <td>{{$bookauthor->remark}}</td>
                            <td>
                                <a href="/bookauthors/{{ $bookauthor->id}}" class="btn btn-primary btn-sm">View</a>
                                <a href="/bookauthors/{{ $bookauthor->id}}/edit" class="btn btn-warning btn-sm">Update</a>
                                <a href="{{url('/library/delete', $bookauthor->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                         @endforeach 
                    </table>
                </div>
        </div>
    </div>
</body>
</html>