<?php

namespace PODKata\Tests;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use PODKata\Lift;
use PODKata\Person;

class PersonTest extends TestCase
{
    public function testPersonCannotEnterMultipleLiftsAtOnce()
    {
        $this->setExpectedException(InvalidArgumentException::class);

        $lift = $this->getMockForAbstractClass(Lift::class);

        $person = new Person(0, 0);
        $person->enter($lift);
        $person->enter($lift);
    }

    public function testPersonCannotEnterLiftOnDifferentFloor()
    {
        $this->setExpectedException(InvalidArgumentException::class);

        $lift = $this->getMockForAbstractClass(Lift::class);

        $person = new Person(99, 0);
        $person->enter($lift);
    }

    public function testPersonCannotExitLiftTheyAreNotIn()
    {
        $this->setExpectedException(InvalidArgumentException::class);

        $person = new Person(0, 0);
        $person->exitLift();
    }

    public function testPersonIsOnDifferentFloorWhenLeavingLiftAfterItHasMoved()
    {
        $lift = $this->getMockForAbstractClass(Lift::class);

        $person = new Person(0, 0);
        $person->enter($lift);
        $lift->moveTo(2);
        $person->exitLift();

        $this->assertSame(2, $person->getCurrentFloor());
    }
}
