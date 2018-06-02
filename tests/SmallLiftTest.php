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
}
