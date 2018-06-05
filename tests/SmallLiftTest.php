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
        $lift->addPassenger(new Person('Test', 0, 0));
    }
}
