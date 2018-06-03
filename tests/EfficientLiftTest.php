<?php

namespace PODKata\Tests;

use PHPUnit\Framework\TestCase;
use PODKata\EfficientLift;
use PODKata\Person;

class EfficientLiftTest extends TestCase
{
    use LiftAssertions;

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

    public function testSomeMorePeopleAreTakenToTheirDestinationEfficiently()
    {
        $this->markTestIncomplete(); // TODO remove this line!
        
        $people = [
            new Person(0, 6),
            new Person(0, 2),
            new Person(0, 2),
            new Person(1, 3),
            new Person(1, 5),
            new Person(3, 4),
            new Person(3, 5),
            new Person(3, 6),
            new Person(3, 7),
            new Person(5, 2),
            new Person(5, 2),
            new Person(7, 1),
            new Person(7, 0),
            new Person(7, 2),
            new Person(7, 6),
        ];

        $lift = new EfficientLift();
        $lift->movePeople($people);

        $this->assertPeopleHaveArrivedAtTheirDestinations($people);

        foreach (range(0, 7) as $floor) {
            $this->assertLessThanOrEqual(2, $lift->getNumberOfVisits($floor));
        }
    }
}
