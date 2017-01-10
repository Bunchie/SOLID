<?php

/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 1/10/17
 * Time: 1:20 PM
 */

/**
 *
 * Нарушает принцип ISP
 *
 * */
interface ITransformer
{
    public function toCar();

    public function toPlane();

    public function toShip();
}

/**
 *
 * Не нарушает принцип ISP
 *
 * */
interface ICarTransformer
{
    public function toCar();
}

interface  IPlaneTransformer
{
    public function toPlane();
}

interface IShipTransformer
{
    public function toShip();
}