<?php

namespace PODKata\Tests;

use PODKata\Person;

trait LiftAssertionsTrait
{
    /**
     * @param Person[] $people
     */
    protected function assertPeopleHaveArrivedAtTheirDestinations(array $people)
    {
        foreach ($people as $person) {
            $this->assertSame($person->getDestination(), $person->getCurrentFloor());
        }
    }
}
