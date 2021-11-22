<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product3.php');

// require Cart Class
require ('database/Cart.php');


// DBController object
$db = new DBController();

// Product object
$product = new Product3($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db );