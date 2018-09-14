<?php

namespace App\Tests;

use App\Barfoo;
use PHPUnit\Framework\TestCase;

class BarfooTest extends TestCase
{
    /**
     * @dataProvider getData
     */
    public function testDoThing(int $input, bool $expected): void
    {
        static::assertEquals($expected, Barfoo::doThing($input));
    }

    public function getData(): array
    {
        return [
            [0, true]
        ];
    }
}
