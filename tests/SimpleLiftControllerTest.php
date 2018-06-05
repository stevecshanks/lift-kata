<?php

namespace PODKata\Tests;

use PHPUnit\Framework\TestCase;
use PODKata\Lift;
use PODKata\Person;
use PODKata\SimpleLift;
use PODKata\SimpleLiftController;

class SimpleLiftControllerTest extends TestCase
{
    use LiftAssertions;

    public function testPeopleAreTakenToTheirDestination()
    {
        $this->markTestIncomplete(); // TODO remove this line!

        $people = [
            new Person('Chaz', 0, 1),
            new Person('Sallie', 1, 2),
            new Person('Rowena', 2, 0),
        ];

        $controller = new SimpleLiftController(new Lift());
        $controller->movePeople($people);

        $this->assertPeopleHaveArrivedAtTheirDestinations($people);
    }
}
