<?php

namespace PODKata;

use InvalidArgumentException;

class Person
{
    /** @var int */
    private $currentFloor;
    /** @var int */
    private $destination;
    /** @var Lift */
    private $lift;

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
     * @return int
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param Lift $lift
     */
    public function enter(Lift $lift)
    {
        if ($this->lift instanceof Lift) {
            throw new InvalidArgumentException('Already in a lift');
        }
        if ($lift->getCurrentFloor() !== $this->getCurrentFloor()) {
            throw new InvalidArgumentException('Lift is on a different floor');
        }
        $this->lift = $lift;
        $this->currentFloor = $lift->getCurrentFloor();
    }

    public function exitLift()
    {
        if (!$this->lift instanceof Lift) {
            throw new InvalidArgumentException('Not in a lift');
        }
        $this->currentFloor = $this->lift->getCurrentFloor();
        $this->lift = null;
    }
}
