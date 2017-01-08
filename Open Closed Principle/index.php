<?php

/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 1/9/17
 * Time: 12:21 AM
 */

require_once('FileLogger.php');
require_once('DBLogger.php');
require_once('Product.php');

$fileLogger = new FileLogger();
$dbLogger = new DBLogger();

$firstProduct = new Product($fileLogger);
$secondProduct = new Product($dbLogger);

$firstProduct->setPrice(100);
$secondProduct->setPrice(100);

echo $firstProduct->err;

echo "<br>";

echo $secondProduct->err;

