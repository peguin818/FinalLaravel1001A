<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Admin Edit Theme</title>
    </head>
    <body>
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit theme</h1>
                    @if(Session::has('success'))
                        <div class="alert alert-success" role ="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif    
                    <form method="POST" action="{{url('themeUpdate')}}">
                        @csrf
                        <div class="md-3">
                            <label for="id" class="form-label">ID: </label>
                            <input type="text" class="form-control" name="id" value="{{$data->themeID}}" readonly>
                            @error('id')
                                <div class="alert alert-danger" role ="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="md-3">
                            <label for="name" class="form-label">Name: </label>
                            <input type="text" class="form-control" name="name" value="{{$data->themeName}}">
                            @error('name')
                                <div class="alert alert-danger" role ="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="md-3">
                            <label for="detail" class="form-label">Details: </label>
                            <textarea name="detail" id="detail" class="form-control">{{$data->themeDetail}}</textarea>
                            @error('detail')
                                <div class="alert alert-danger" role ="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <br><br>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{url('themeList')}}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>