<?php

namespace PODKata;

use InvalidArgumentException;

abstract class Lift
{
    /** @var int */
    private $currentFloor;
    /** @var int[] */
    private $floorsVisited;
    /** @var Person[] */
    private $passengers;

    /**
     * Lift constructor.
     */
    public function __construct()
    {
        $this->currentFloor = 0;
        $this->floorsVisited = [$this->currentFloor];
        $this->passengers = [];
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
        $this->floorsVisited[] = $currentFloor;
    }

    /**
     * @param Person $person
     */
    public function addPassenger(Person $person)
    {
        if (array_search($person, $this->passengers, true) !== false) {
            throw new InvalidArgumentException("{$person->getName()} is already in lift");
        }
        if ($this->getCurrentFloor() !== $person->getCurrentFloor()) {
            throw new InvalidArgumentException("{$person->getName()} is on a different floor");
        }
        $this->passengers[] = $person;
    }

    /**
     * @param Person $person
     */
    public function removePassenger(Person $person)
    {
        $position = array_search($person, $this->passengers, true);
        if ($position === false) {
            throw new InvalidArgumentException("{$person->getName()} is not in lift");
        }
        unset($this->passengers[$position]);

        $person->setCurrentFloor($this->getCurrentFloor());
    }

    /**
     * @return Person[]
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * @return int
     */
    public function getNumberOfPassengers()
    {
        return count($this->passengers);
    }

    /**
     * @param int $floor
     * @return int
     */
    public function getNumberOfVisits($floor)
    {
        return count(
            array_filter(
                $this->floorsVisited,
                function ($thisFloor) use ($floor) {
                    return $thisFloor === $floor;
                }
            )
        );
    }

    /**
     * @return int
     */
    public function getTotalNumberOfVisits()
    {
        return count($this->floorsVisited);
    }

    /**
     * @param Person[] $people
     */
    abstract public function movePeople(array $people);
}
