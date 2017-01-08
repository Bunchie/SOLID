<?php

/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 1/9/17
 * Time: 12:33 AM
 */

require_once('ILogger.php');

class DBLogger implements ILogger
{
    public $err = "ERROR db";

    private function saveToDB($message)
    {

        // ...

        echo $message;
    }

    public function log($message)
    {
        // ...

        $this->saveToDB($message);

    }

}