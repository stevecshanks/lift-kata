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
            new Person('Sydnie', 0, 1),
            new Person('Delpha', 1, 2),
            new Person('Demarcus', 2, 0),
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
            new Person('Augustus', 0, 6),
            new Person('Jerel', 0, 2),
            new Person('Caleigh', 0, 2),
            new Person('Ross', 1, 3),
            new Person('Will', 1, 5),
            new Person('Hermann', 3, 4),
            new Person('Santina', 3, 5),
            new Person('Gladyce', 3, 6),
            new Person('Zoe', 3, 7),
            new Person('Javonte', 5, 2),
            new Person('Linwood', 5, 2),
            new Person('Richard', 7, 1),
            new Person('Verla', 7, 0),
            new Person('Yvonne', 7, 2),
            new Person('Gino', 7, 6),
        ];

        $lift = new EfficientLift();
        $lift->movePeople($people);

        $this->assertPeopleHaveArrivedAtTheirDestinations($people);

        foreach (range(0, 7) as $floor) {
            $this->assertLessThanOrEqual(2, $lift->getNumberOfVisits($floor));
        }
    }
}
