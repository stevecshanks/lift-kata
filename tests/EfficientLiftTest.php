<?php

namespace PODKata\Tests;

use PHPUnit\Framework\TestCase;
use PODKata\EfficientLift;
use PODKata\Person;

class EfficientLiftTest extends TestCase
{
    use LiftAssertionsTrait;

    public function testPeopleAreTakenToTheirDestinationEfficiently()
    {
        $this->markTestIncomplete(); // TODO remove this line!

        $people = [
            new Person(0, 1),
            new Person(1, 2),
            new Person(2, 0),
        ];

        $lift = new EfficientLift();
        $lift->movePeople($people);

        $this->assertPeopleHaveArrivedAtTheirDestinations($people);

        foreach ([0, 1, 2] as $floor) {
            $this->assertLessThanOrEqual(2, $lift->getNumberOfVisits($floor));
        }
    }
}
