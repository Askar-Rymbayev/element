<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="uploader.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="file" name="file[]">
    <input type="file" name="file[]">
    <input type="submit" value="submit">
</form>

</body>
</html>