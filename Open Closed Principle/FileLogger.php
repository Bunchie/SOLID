<?php

/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 1/9/17
 * Time: 12:21 AM
 */

require_once('ILogger.php');

class FileLogger implements ILogger
{
    public $err = "ERROR file";

    private function saveToFile($message){

        // ...

    }

    public function log($message){

        // ...

        $this->saveToFile($message);

    }

}