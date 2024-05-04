<?php

namespace App\Tests;

use App\Truncater;
use PHPUnit\Framework\TestCase;

class TruncaterTest extends TestCase
{
    public function testTruncate()
    {
        $defaultTruncater = new Truncater();
        $this->assertSame("Шурыгина Ксения Николаевна", $defaultTruncater->truncate("Шурыгина Ксения Николаевна"));
        $this->assertSame("Шурыгина Кс...", $defaultTruncater->truncate(
            "Шурыгина Ксения Николаевна",
            ['length' => 11]
        ));
        $this->assertSame("Шурыгина Ксения ...", $defaultTruncater->truncate(
            "Шурыгина Ксения Николаевна",
            ['length' => -15]
        ));
        $this->assertSame("Шурыгина Кс*", $defaultTruncater->truncate(
            "Шурыгина Ксения Николаевна",
            ['length' => 11, 'separator' => '*']
        ));
        $this->assertSame("Шурыгина Ксения Николаевна", $defaultTruncater->truncate("Шурыгина Ксения Николаевна"));

        $overriddenTruncater1 = new Truncater(['length' => 16]);
        $this->assertSame("Шурыгина Ксения ...", $overriddenTruncater1->truncate("Шурыгина Ксения Николаевна"));
        $this->assertSame("Шурыгина Ксения \\", $overriddenTruncater1->truncate(
            "Шурыгина Ксения Николаевна",
            ['separator' => '\\']
        ));

        $overriddenTruncater2 = new Truncater(['length' => 16, 'separator' => '***']);
        $this->assertSame("Шурыгина Ксения ***", $overriddenTruncater2->truncate("Шурыгина Ксения Николаевна"));
    }
}
