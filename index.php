<?php
$implementedPages = ['index'];
// Include the requested html page

// get the url path
$pathArr = explode('/', $_SERVER['REQUEST_URI']);
array_shift($pathArr);
$path = join('/', $pathArr);

if (!in_array($path, $implementedPages)) {
    $path = 'error';
}

include $path . '.html';
?>
