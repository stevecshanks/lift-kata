<?php

namespace PODKata\Tests;

use LogicException;
use PHPUnit\Framework\TestCase;
use PODKata\Person;
use PODKata\SmallLift;

class SmallLiftTest extends TestCase
{
    use LiftAssertionsTrait;

    public function testLiftCannotExceedCapacity()
    {
        $this->setExpectedException(LogicException::class);

        $lift = new SmallLift(0);
        $lift->addPassenger(new Person(0, 0));
    }

    public function testPeopleAreTakenToTheirDestinationEfficientlyWithoutExceedingCapacity()
    {
        $this->markTestIncomplete(); // TODO remove this line!

        $people = [
            new Person(0, 1),
            new Person(1, 2),
            new Person(1, 2),
        ];

        $lift = new SmallLift(1);
        $lift->movePeople($people);

        $this->assertPeopleHaveArrivedAtTheirDestinations($people);

        $this->assertLessThanOrEqual(5, $lift->getTotalNumberOfVisits());
    }

    public function testSomeMorePeopleAreTakenToTheirDestinationEfficientlyWithoutExceedingCapacity()
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

        $lift = new SmallLift(3);
        $lift->movePeople($people);

        $this->assertPeopleHaveArrivedAtTheirDestinations($people);

        // TODO see how far you can reduce this!
        $this->assertLessThanOrEqual(30, $lift->getTotalNumberOfVisits());
    }
}
