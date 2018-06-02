<?php

namespace PODKata\Tests;

use LogicException;
use PHPUnit\Framework\TestCase;
use PODKata\Person;
use PODKata\SmallLift;

class SmallLiftTest extends TestCase
{
    public function testLiftCannotExceedCapacity()
    {
        $this->setExpectedException(LogicException::class);

        $lift = new SmallLift(0);
        $lift->addPassenger(new Person(0, 0));
    }

    public function testPeopleAreTakenToTheirDestinationEfficientlyWithoutExceedingCapacity()
    {
        $this->markTestIncomplete(); // TODO remove this line!

        $person1 = new Person(0, 1);
        $person2 = new Person(1, 2);
        $person3 = new Person(1, 2);

        $lift = new SmallLift(1);
        $lift->movePeople([$person1, $person2, $person3]);

        $this->assertSame(1, $person1->getCurrentFloor());
        $this->assertSame(2, $person2->getCurrentFloor());
        $this->assertSame(2, $person3->getCurrentFloor());

        $this->assertLessThanOrEqual(1, $lift->getNumberOfVisits(0));
        $this->assertLessThanOrEqual(2, $lift->getNumberOfVisits(1));
        $this->assertLessThanOrEqual(2, $lift->getNumberOfVisits(2));
    }
}
