<?php

namespace App;

use App\Room;

class BreakfastBuffet implements Room
{
    protected $room;

    public function __construct(Room $room)
    {
        $this->room = $room;
    }

    public function getCost()
    {
        return $this->room->getCost() + 500;
    }

    public function getDescription()
    {
        return $this->room->getDescription() . ', завтрак "шведский стол"';
    }
}
