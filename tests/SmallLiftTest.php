<?php

namespace PODKata\Tests;

use LogicException;
use PHPUnit\Framework\TestCase;
use PODKata\Person;
use PODKata\SmallLift;

class SmallLiftTest extends TestCase
{
    use LiftAssertions;

    public function testLiftCannotExceedCapacity()
    {
        $this->setExpectedException(LogicException::class);

        $lift = new SmallLift(0);
        $lift->addPassenger(new Person('Test', 0, 0));
    }

    public function testPeopleAreTakenToTheirDestinationEfficientlyWithoutExceedingCapacity()
    {
        $this->markTestIncomplete(); // TODO remove this line!

        $people = [
            new Person('Robb', 0, 1),
            new Person('Lyda', 1, 2),
            new Person('Catharine', 1, 2),
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
            new Person('Damon', 0, 6),
            new Person('Arden', 0, 2),
            new Person('Joannie', 0, 2),
            new Person('Alex', 1, 3),
            new Person('Jany', 1, 5),
            new Person('Eudora', 3, 4),
            new Person('Dan', 3, 5),
            new Person('Bernita', 3, 6),
            new Person('Brice', 3, 7),
            new Person('Jessyca', 5, 2),
            new Person('Adrienne', 5, 2),
            new Person('Grayson', 7, 1),
            new Person('Rowan', 7, 0),
            new Person('Kip', 7, 2),
            new Person('Dolly', 7, 6),
        ];

        $lift = new SmallLift(3);
        $lift->movePeople($people);

        $this->assertPeopleHaveArrivedAtTheirDestinations($people);

        // TODO see how far you can reduce this!
        $this->assertLessThanOrEqual(30, $lift->getTotalNumberOfVisits());
    }
}
