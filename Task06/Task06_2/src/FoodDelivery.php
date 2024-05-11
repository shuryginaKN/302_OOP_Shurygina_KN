<?php

namespace App;

use App\Room;

class FoodDelivery implements Room
{
    protected $room;

    public function __construct(Room $room)
    {
        $this->room = $room;
    }

    public function getCost()
    {
        return $this->room->getCost() + 300;
    }

    public function getDescription()
    {
        return $this->room->getDescription() . ', доставка еды в номер';
    }
}
