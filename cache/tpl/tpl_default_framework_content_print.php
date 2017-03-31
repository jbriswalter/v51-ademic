<?php $_result='<!DOCTYPE html>
<html lang="' . $_data->get('L_XML_LANGUAGE') . '">
	<head>
		<title>' . $_data->get('PAGE_TITLE') . '</title>
		<meta charset="windows-1252" />
		<link rel="stylesheet" href="' . $_data->get('PATH_TO_ROOT') . '/templates/default/theme/print.css" type="text/css" media="screen" />
	</head>
	<body>
		<h1>' . $_data->get('TITLE') . '</h1>
		<div>' . $_data->get('CONTENT') . '</div>
	</body>
</html>'; ?>