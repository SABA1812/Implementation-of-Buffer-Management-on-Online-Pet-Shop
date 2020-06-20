<?php
if($_GET)
{
	$name = $_GET["name"];
	$price = $_GET["price"];

	$data = ''.$name.''.PHP_EOL;
	$fp = fopen('data/cart/item.txt', 'a');
	fwrite($fp, $data);
	fclose($fp);


	$data = ''.$price.''.PHP_EOL;
	$fp = fopen('data/cart/price.txt', 'a');
	fwrite($fp, $data);
	fclose($fp);


	header("Location:index.php");

}

 
   	
 