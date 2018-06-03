<?php

namespace PODKata\Tests;

use PHPUnit\Framework\TestCase;
use PODKata\Person;
use PODKata\SimpleLift;

class SimpleLiftTest extends TestCase
{
    use LiftAssertions;

    public function testPeopleAreTakenToTheirDestination()
    {
        $this->markTestIncomplete(); // TODO remove this line!

        $people = [
            new Person(0, 1),
            new Person(1, 2),
            new Person(2, 0),
        ];

        $lift = new SimpleLift();
        $lift->movePeople($people);

        $this->assertPeopleHaveArrivedAtTheirDestinations($people);
    }
}
