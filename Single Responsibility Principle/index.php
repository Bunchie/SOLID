<?php

/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 1/8/17
 * Time: 10:23 PM
 */

/**
 * 	(!) A class should have only one reason to change. (Robert C. Martin)
 */

require_once('Logger.php');

require_once('Product.php');

$logger = new Logger();

$product = new Product($logger);

$product->setPrice(100);

echo $product->price;

