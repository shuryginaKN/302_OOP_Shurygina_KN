<?php

namespace App;

use App\Room;

class Internet implements Room
{
    protected $room;

    public function __construct(Room $room)
    {
        $this->room = $room;
    }

    public function getCost()
    {
        return $this->room->getCost() + 100;
    }

    public function getDescription()
    {
        return $this->room->getDescription() . ', выделенный Интернет';
    }
}
