<?php
namespace Design\Structure\Flyweight;

/**
 * 共享的具体享元角色
 *
 * Class ConcreteFlyweight
 * @package Design\Structure\Flyweight
 */
class ConcreteFlyweight implements IFlyweight
{

    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }


    public function show()
    {
        $this->state +=  1000;

        return $this->state;
    }
}