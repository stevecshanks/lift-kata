<?php

namespace PODKata;

class Person
{
    /** @var string */
    private $name;
    /** @var int */
    private $currentFloor;
    /** @var int */
    private $destination;

    /**
     * Person constructor.
     * @param string $name
     * @param int $currentFloor
     * @param int $destination
     */
    public function __construct($name, $currentFloor, $destination)
    {
        $this->name = $name;
        $this->currentFloor = $currentFloor;
        $this->destination = $destination;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
