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
