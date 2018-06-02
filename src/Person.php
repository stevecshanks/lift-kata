<?php

namespace PODKata;

class Person
{
    /** @var int */
    private $currentFloor;
    /** @var int */
    private $destination;

    /**
     * Person constructor.
     * @param int $currentFloor
     * @param int $destination
     */
    public function __construct($currentFloor, $destination)
    {
        $this->currentFloor = $currentFloor;
        $this->destination = $destination;
    }

    /**
     * @return int
     */
    public function getCurrentFloor()
    {
        return $this->currentFloor;
    }

    /**
     * @param int $currentFloor
     */
    public function setCurrentFloor($currentFloor)
    {
        $this->currentFloor = $currentFloor;
    }

    /**
     * @return int
     */
    public function getDestination()
    {
        return $this->destination;
    }
}
