<?php

namespace PODKata\Tests;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use PODKata\Lift;
use PODKata\Person;

class LiftTest extends TestCase
{
    public function testPersonCannotEnterTheSameLiftMoreThanOnce()
    {
        $this->setExpectedException(InvalidArgumentException::class);

        $lift = new Lift();
        $person = new Person('Test', 0, 0);

        $lift->addPassenger($person);
        $lift->addPassenger($person);
    }

    public function testPersonCannotEnterLiftOnDifferentFloor()
    {
        $this->setExpectedException(InvalidArgumentException::class);

        $lift = new Lift();
        $person = new Person('Test', 99, 0);

        $lift->addPassenger($person);
    }

    public function testPersonCannotExitLiftTheyAreNotInIt()
    {
        $this->setExpectedException(InvalidArgumentException::class);

        $lift = new Lift();
        $person = new Person('Test', 0, 0);

        $lift->removePassenger($person);
    }

    public function testPersonIsOnDifferentFloorWhenLeavingLiftAfterItHasMoved()
    {
        $lift = new Lift();
        $person = new Person('Test', 0, 0);

        $lift->addPassenger($person);
        $lift->moveTo(2);
        $lift->removePassenger($person);

        $this->assertSame(2, $person->getCurrentFloor());
    }

    public function testNumberOfPassengersInLiftIsCorrect()
    {
        $lift = new Lift();

        $person1 = new Person('Test', 0, 0);
        $person2 = new Person('Test', 0, 0);

        $lift->addPassenger($person1);
        $lift->addPassenger($person2);
        $lift->removePassenger($person1);

        $this->assertSame(1, $lift->getNumberOfPassengers());
    }

    public function testVisitsToFloorsAreRecordedCorrectly()
    {
        $lift = new Lift();

        $lift->moveTo(1);
        $lift->moveTo(2);
        $lift->moveTo(1);

        $this->assertSame(1, $lift->getNumberOfVisits(0));
        $this->assertSame(2, $lift->getNumberOfVisits(1));
        $this->assertSame(1, $lift->getNumberOfVisits(2));
        $this->assertSame(0, $lift->getNumberOfVisits(99));
    }

    public function testTotalNumberOfVisitsIsRecordedCorrectly()
    {
        $lift = new Lift();

        $lift->moveTo(1);
        $lift->moveTo(2);
        $lift->moveTo(1);

        $this->assertSame(4, $lift->getTotalNumberOfVisits());
    }
}
