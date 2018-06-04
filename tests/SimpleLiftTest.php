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
            new Person('Chaz', 0, 1),
            new Person('Sallie', 1, 2),
            new Person('Rowena', 2, 0),
        ];

        $lift = new SimpleLift();
        $lift->movePeople($people);

        $this->assertPeopleHaveArrivedAtTheirDestinations($people);
    }
}
