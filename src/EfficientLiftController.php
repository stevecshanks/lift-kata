<?php

namespace PODKata;

class EfficientLiftController
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
