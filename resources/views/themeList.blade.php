<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Admin Themes List</title>
    </head>
    <body>
        <div class="contrainer" style="margin: top 20px;">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Themes List</h1>
                    @if(Session::has('success'))
                        <div class="alert alert-danger" role ="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <div style="margin-right: 5%; float: right">
                        <a href="{{url ('themeAdd')}}" class="btn btn-success pull-right">Add New Theme</a>
                    </div>
                    <div style="margin-left: 5%; float: left">
                        <a href="{{url('themeList')}}" class="btn btn-success pull-left">Home</a>
                    </div>
                    <br><br>
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td>{{$row->themeID}}</td>
                                    <td>{{$row->themeName}}</td>
                                    <td>{{$row->themeDetail}}</td>
                                    <td>
                                        <a href="{{url('themeEdit/' . $row->themeID)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{url('themeDelete/' . $row->themeID)}}" class="btn btn-danger" onclick="return confirm('You are about to delete a Theme');">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>