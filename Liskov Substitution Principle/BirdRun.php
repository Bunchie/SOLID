<?php

/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 1/10/17
 * Time: 1:15 AM
 */
class BirdRun
{
    private $bird;

    /**
     * BirdRun constructor.
     * @param Bird $bird
     */
    public function __construct(Bird $bird)
    {
        $this->bird = $bird;
    }

    /**
     * @return int
     */
    public function run()
    {
        $flySpeed = $this->bird->fly();
        return $flySpeed;
    }
}