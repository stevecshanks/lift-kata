<?php

namespace PODKata;

use LogicException;

class SmallLift extends Lift
{
    /** @var int */
    private $capacity;

    /**
     * SmallLift constructor.
     * @param $capacity
     */
    public function __construct($capacity)
    {
        parent::__construct();
        $this->capacity = $capacity;
    }

    /**
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    public function addPassenger(Person $person)
    {
        if ($this->getNumberOfPassengers() >= $this->getCapacity()) {
            throw new LogicException('Lift is already at capacity');
        }
        parent::addPassenger($person);
    }
}
