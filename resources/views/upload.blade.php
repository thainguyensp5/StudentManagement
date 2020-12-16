<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="{{route('uploadFile')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="file">Choose file</label>
            <input type="file" name="file">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</body>
</html>