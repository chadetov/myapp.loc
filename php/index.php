<?php 
	require "vendor/autoload.php";

	//use Minyay\Boundary;

	$book = new Minyay\Boundary\Book();

	print_r($book);

	echo '<hr />';

	//$classname = $_POST['classname'];
	$classname = 'Book';

	$x = 'Minyay\Boundary\ ';
	$y = substr($x, -1);

	$book = new $y.$class_name;
	print_r($book);
