<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShortLink</title>
</head>
<body>
<form method="post">
    <p>ссылка: <input type="text" name="link"></p>
    <p><input type="submit" value="сделай мне короткую ссылку"></p>
</form>
</body>
</html>

<?php
$link = $_POST['link'] ?? '';
//var_dump($link);
$result = preg_match('/^http[s]?:\/\/([a-z0-9_-]+\.)+[a-z0-9_-]{2,}$/', $link, $matches);
//var_dump($result);

/*

https://sdfsdf.post.egov.kz/sdfsjdfhsdf/sdfsdfsd/fsdfsdf?sdfsdf=33&sdfsf=sdfsdf

*/
//var_dump($matches);

if (!isset($matches[0])) {
    exit;
}

$link = $matches[0];

$token = bin2hex(random_bytes(3));
while (key_exists($token, $_SESSION['links'])) {
    $token = bin2hex(random_bytes(3));
}

$_SESSION['links'][$token] = $link;

var_dump($_SESSION);

/*

short.link/8sdf54

*/