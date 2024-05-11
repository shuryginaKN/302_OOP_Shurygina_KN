<?php

namespace App;

use App\Room;

class EconomyRoom implements Room
{
    public function getCost()
    {
        return 1000;
    }

    public function getDescription()
    {
        return '"Эконом" - 1000 руб/ночь';
    }
}
