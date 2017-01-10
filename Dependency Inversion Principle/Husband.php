<?php

/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 1/10/17
 * Time: 3:56 PM
 */


/**
 * Bad !!!
 * */
class LowRankingMale
{
    public function eat()
    {
        $wife = new Wife;

        $food = $wife->getFood();

        // ... eat
    }
}

/**
 * Better !!!
 * */
class AverageRankingMale
{

    private $wife;

    public function __construct(Wife $wife)
    {
        $this->wife = $wife;
    }

    public function eat()
    {
        $food = $this->wife->getFood();

        //... eat
    }

}

/**
 * Super !!!
 * */
class HighRankingMale
{
    private $foodProvider;

    public function __construct(IFoodProvider $foodProvider)
    {
        $this->foodProvider = $foodProvider;
    }

    public function eat()
    {
        $food = $this->foodProvider->getFood();

        // ... eat
    }

}
