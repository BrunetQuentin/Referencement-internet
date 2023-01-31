<?php

$redirect = $_GET['redirect'] ?? null;
$host     = $_SERVER['HTTP_HOST'];

// Imagine code sending the data from the form to the server

if ($redirect != null) {
	switch ($page) {
		case 'cv':
			$page = 'freelance';
		break;
		case 'mission':
			$page = 'mission';
		break;
		default:
			$page = 'guide';
		break;
	}
	header("Location: http://$host/$page");
	exit;
}