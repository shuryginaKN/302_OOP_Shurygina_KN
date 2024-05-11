<?php

namespace App;

use App\Room;

class StandardRoom implements Room
{
    public function getCost()
    {
        return 2000;
    }

    public function getDescription()
    {
        return '"Стандарт" - 2000 руб/ночь';
    }
}
