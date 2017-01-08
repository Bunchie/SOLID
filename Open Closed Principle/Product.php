<?php

/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 1/9/17
 * Time: 12:21 AM
 */

require_once('ILogger.php');

class Product
{
    public $err;

    public $price;

    private $logger;

    public function __construct(ILogger $logger = null)
    {
        $this->logger = $logger;
    }

    public function setPrice($price)
    {

        try {

            throw  new Exception("error");

            $this->price = $price;

            // save price in db

        } catch (Exception $e) {

            $this->err = $this->logger->err;

            //$this->logger->log($e->getMessage());

        }

    }

    public function __toString()
    {
        // TODO: Implement __toString() method.

        return $this->err;
    }

}
