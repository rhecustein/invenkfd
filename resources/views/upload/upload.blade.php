<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
    <div class="col-lg-8 mx-auto my-5">	
 
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }} <br/>
            @endforeach
        </div>
        @endif

        <form action="/upload/proses" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <b>File Gambar</b><br/>
                <input type="file" name="file">
            </div>

            <input type="submit" value="Upload" class="btn btn-primary">
        </form>
    </div>
</body>
</html>