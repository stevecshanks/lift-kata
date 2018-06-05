<?php

namespace PODKata;

class SmallLiftController
{
    /** @var SmallLift */
    protected $lift;

    /**
     * SimpleLiftController constructor.
     * @param SmallLift $lift
     */
    public function __construct(SmallLift $lift)
    {
        $this->lift = $lift;
    }

    /**
     * @param Person[] $people
     */
    public function movePeople(array $people)
    {
        // TODO: Implement movePeople() method.
    }
}
