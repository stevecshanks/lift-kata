<?php

namespace PODKata\Tests;

use PODKata\Person;

trait LiftAssertions
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
