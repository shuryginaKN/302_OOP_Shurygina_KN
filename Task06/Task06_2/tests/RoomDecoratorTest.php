<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\BreakfastBuffet;
use App\Dinner;
use App\Sofa;
use App\FoodDelivery;
use App\Internet;
use App\EconomyRoom;
use App\StandardRoom;
use App\SuiteRoom;

class RoomDecoratorTest extends TestCase
{
    public function testRoomDecorator()
    {
        $economyRoom = new EconomyRoom();
        $this->assertSame(1000, $economyRoom->getCost());
        $this->assertSame('"Эконом" - 1000 руб/ночь', $economyRoom->getDescription());

        $economyRoom = new Dinner($economyRoom);
        $this->assertSame(1800, $economyRoom->getCost());
        $this->assertSame('"Эконом" - 1000 руб/ночь, ужин', $economyRoom->getDescription());

        $economyRoom = new Internet($economyRoom);
        $this->assertSame(1900, $economyRoom->getCost());
        $this->assertSame('"Эконом" - 1000 руб/ночь, ужин, выделенный Интернет', $economyRoom->getDescription());

        $standardRoom = new StandardRoom();
        $this->assertSame(2000, $standardRoom->getCost());
        $this->assertSame('"Стандарт" - 2000 руб/ночь', $standardRoom->getDescription());

        $standardRoom = new FoodDelivery($standardRoom);
        $this->assertSame(2300, $standardRoom->getCost());
        $this->assertSame('"Стандарт" - 2000 руб/ночь, доставка еды в номер', $standardRoom->getDescription());

        $suiteRoom = new SuiteRoom();
        $this->assertSame(3000, $suiteRoom->getCost());
        $this->assertSame('"Люкс" - 3000 руб/ночь', $suiteRoom->getDescription());

        $suiteRoom = new Sofa($suiteRoom);
        $this->assertSame(3500, $suiteRoom->getCost());
        $this->assertSame('"Люкс" - 3000 руб/ночь, дополнительный диван', $suiteRoom->getDescription());

        $suiteRoom = new BreakfastBuffet($suiteRoom);
        $this->assertSame(4000, $suiteRoom->getCost());
        $this->assertSame('"Люкс" - 3000 руб/ночь, дополнительный диван, завтрак "шведский стол"', $suiteRoom->getDescription());
    }
}
