<?php

namespace PODKata;

abstract class Lift
{
    /** @var int */
    private $currentFloor;

    /**
     * Lift constructor.
     */
    public function __construct()
    {
        $this->currentFloor = 0;
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
    public function moveTo($currentFloor)
    {
        $this->currentFloor = $currentFloor;
    }

    /**
     * @param Person[] $people
     */
    abstract public function movePeople(array $people);
}
