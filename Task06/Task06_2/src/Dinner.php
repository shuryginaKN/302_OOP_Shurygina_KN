<?php

namespace App;

use App\Room;

class Dinner implements Room
{
    protected $room;

    public function __construct(Room $room)
    {
        $this->room = $room;
    }

    public function getCost()
    {
        return $this->room->getCost() + 800;
    }

    public function getDescription()
    {
        return $this->room->getDescription() . ', ужин';
    }
}
