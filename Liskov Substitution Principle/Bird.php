<?php

/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 1/10/17
 * Time: 12:39 AM
 */
class Bird
{

    /**
     * @return int
     */
    public function fly()
    {

        $flySpeed = 10;

        return $flySpeed;

    }

}

/**
 * Дочерний класс от Bird
 * Не изменяет поведение но дополняет
 * Не нарушает принцип LSP
 */
class Duck extends Bird
{

    /**
     * @return int
     */
    public function fly()
    {

        $flySpeed = 8;

        return $flySpeed;

    }

    /**
     * @return int
     */
    public function swim()
    {

        $swimSpeed = 2;

        return $swimSpeed;

    }
}

/**
 * Дочерний класс от Bird
 * Изменяет поведение
 * Нарушает принцип LSP
 */
class Penguin extends Bird
{
    /**
     * @return string !!!
     */
    public function fly()
    {
        // die("I CANT FLY!'); - не типичное поведение

        return " I CANT FLY!"; // - не типичное поведение

    }
}