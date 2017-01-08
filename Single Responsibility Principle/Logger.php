<?php

/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 1/8/17
 * Time: 10:39 PM
 */

class Logger
{
    public function log($message){

        //...

        $this->saveToFile($message);
    }
}