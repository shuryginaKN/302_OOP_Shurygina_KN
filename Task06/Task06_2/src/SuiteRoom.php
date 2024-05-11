<?php

namespace App;

use App\Room;

class SuiteRoom implements Room
{
    public function getCost()
    {
        return 3000;
    }

    public function getDescription()
    {
        return '"Люкс" - 3000 руб/ночь';
    }
}
