<?php
/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 1/10/17
 * Time: 12:39 AM
 */

$bird = new Bird();

//$bird = new Duck(); - не нарушаем LSP

//$bird = new Penguin(); - нарушаем LSP

$birdRun = new BirdRun($bird);

$birdRun->run();
