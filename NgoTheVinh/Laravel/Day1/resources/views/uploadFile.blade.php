<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route("postFile")}}" method="post" 
    enctype="multipart/form-data" >
    {{ csrf_field() }}
        <input type="file" name="myFile">
        <input type="submit" value="submit">
    </form>
</body>
</html>