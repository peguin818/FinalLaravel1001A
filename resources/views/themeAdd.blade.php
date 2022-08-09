<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Admin Add Theme</title>
    </head>
    <body>
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-md-12">
                    <h1>Add new theme</h1>
                    @if(Session::has('success'))
                        <div class="alert alert-success" role ="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif    
                    <form method="POST" action="{{url('themeSave')}}">
                        @csrf
                        <!--<div class="md-3">
                            <label for="id" class="form-label">ID: </label>
                            <input type="text" class="form-control" name="id" placeholder="Enter Theme ID here" value="{{old('id')}}">
                            @error('id')
                                <div class="alert alert-danger" role ="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>-->
                        <div class="md-3">
                            <label for="name" class="form-label">Name: </label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Theme Name here" value="{{old('name')}}">
                            @error('name')
                                <div class="alert alert-danger" role ="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <!--<div class="md-3">
                            <label for="price" class="form-label">Price: </label>
                            <input type="number" class="form-control" name="price" placeholder="Enter Product Price here" value="{{old('price')}}">
                            @error('price')
                                <div class="alert alert-danger" role ="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>-->
                        <div class="md-3">
                            <label for="detail" class="form-label">Details: </label>
                            <textarea type="text" name="detail" id="detail" class="form-control" placeholder="Enter Theme Details here">{{old('detail')}}</textarea>
                            @error('detail')
                                <div class="alert alert-danger" role ="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <!--<div class="md-3">
                            <label for="image1" class="form-label">Image 1: </label>
                            <input type="file" class="form-control" name="image1" value="{{old('name')}}">
                            @error('image1')
                                <div class="alert alert-danger" role ="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="md-3">
                            <label for="image2" class="form-label">Image 2: </label>
                            <input type="file" class="form-control" name="image2" value="{{old('name')}}">
                        </div>
                        <div class="md-3">
                            <label for="image3" class="form-label">Image 3: </label>
                            <input type="file" class="form-control" name="image3" value="{{old('name')}}">
                        </div>
                        <div class="md-3">
                            <label for="theme" class="form-label">Theme: </label>
                            <input type="text" class="form-control" name="theme" value="{{old('name')}}">
                            @error('theme')
                                <div class="alert alert-danger" role ="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>-->
                        <br><br>
                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="{{url('themeList')}}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>