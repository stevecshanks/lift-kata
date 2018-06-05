<?php

namespace PODKata;

class SimpleLiftController
{
    /** @var Lift */
    protected $lift;

    /**
     * SimpleLiftController constructor.
     * @param Lift $lift
     */
    public function __construct(Lift $lift)
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
