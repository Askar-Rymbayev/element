<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proxy</title>
    <style>
        .proxy {
            background-color: white;
            margin: 0;
            padding: 0;
            color: black;
        }
        .iframe {
            border: 1px solid red;
            margin: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="proxy">
    <form action="proxy.php" method="get">
        <p>сайт: <input type="text" name="website"></p>
        <p><input type="submit" value="открыть страницу"></p>
    </form>
</div>
<?php

$website = $_GET['website'] ?? false;

//var_dump($website);

if ($website) {
    $content = file_get_contents($website);

    preg_match('/http[s]?:\/\/([a-z0-9_-]+\.)*[a-z0-9_-]+/', $website, $matches);
    $domain = $website;
//    var_dump($matches);
    if (isset($matches[0])) {
        $domain = $matches[0];
    }

    // заменить ссылки, чтобы они все открывались внутри нашего прокси сайта
    $content = preg_replace('/(<a[^>]*)(href=")(http[s]?:\/\/.*)(")/', '$1$2http://mysite.loc/week6/lesson3/proxy.php?website=$3$4', $content);
    $content = preg_replace('/(<img[^>]*)(src=")(\/.*)(")/', '$1$2' . $domain . '$3$4', $content);
    $content = preg_replace('/(<a[^>]*)(href=")(\/.*)(")/', '$1$2http://mysite.loc/week6/lesson3/proxy.php?website=' . $domain . '$3$4', $content);

    ?>
    <div class="iframe">
        <?php echo $content; ?>
    </div>
    <?php
}
?>
</body>
</html>