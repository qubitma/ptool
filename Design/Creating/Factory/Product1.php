<?php
namespace Design\Creating\Factory;


class Product1 implements IProduct
{
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function run()
    {
        print __CLASS__ .  PHP_EOL;

    }

}