<?php

/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 1/10/17
 * Time: 1:20 PM
 */
class Transformers implements ICarTransformer, IPlaneTransformer, IShipTransformer
{
    public function toCar()
    {
        echo "transform to car";
    }

    public function toPlane()
    {
        echo "transform to plane";
    }

    public function toShip()
    {
        echo "transform to ship";
    }
}

class CarTransformer implements ICarTransformer
{
    public function toCar()
    {
        echo "transform to car";
    }

    /* public function toPlane()
    {
        throw new Exception("I cant transform to plane!");
    }

    public function toShip()
    {
        throw new Exception("I cant transform to ship!");
    } */
}