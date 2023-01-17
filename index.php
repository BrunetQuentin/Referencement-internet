<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/guide.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/global.css">
    <title>Guide</title>
</head>
<body>
    <?php
    $implementedPages = ['guide'];
    // Include the requested html page

    // get the url path
    $pathArr = explode('/', $_SERVER['REQUEST_URI']);
    array_shift($pathArr);
    $path = join('/', $pathArr);

    // if the path is not in the implemented pages, redirect to error page
    if (!in_array($path, $implementedPages)) {
        $path = 'error';
    }

    include 'php/' . $path . '.php';
    ?>
</body>
</html>