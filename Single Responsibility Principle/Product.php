<?php

/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 1/8/17
 * Time: 10:30 PM
 */

class Product
{
    public $price;

    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function setPrice($price)
    {

        try {

            $this->price = $price;

            // save price in db

        } catch (Exception $e) {

            $this->logger->log($e->getMessage());

        }

    }

}