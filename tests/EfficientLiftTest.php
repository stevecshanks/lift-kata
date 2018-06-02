<?php

namespace PODKata\Tests;

use PHPUnit\Framework\TestCase;
use PODKata\EfficientLift;
use PODKata\Person;

class EfficientLiftTest extends TestCase
{
    public function testPeopleAreTakenToTheirDestinationEfficiently()
    {
        $this->markTestIncomplete(); // TODO remove this line!

        $person1 = new Person(0, 1);
        $person2 = new Person(1, 2);
        $person3 = new Person(2, 0);

        $lift = new EfficientLift();
        $lift->movePeople([$person1, $person2, $person3]);

        $this->assertSame(1, $person1->getCurrentFloor());
        $this->assertSame(2, $person2->getCurrentFloor());
        $this->assertSame(0, $person3->getCurrentFloor());

        foreach ([0, 1, 2] as $floor) {
            $this->assertLessThanOrEqual(2, $lift->getNumberOfVisits($floor));
        }
    }
}
