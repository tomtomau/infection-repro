<?php

namespace App;

class Barfoo {
    public static function doThing(int $foo): bool
    {
        $bar = $foo + 1;

        if ($bar === 0) {
            return false;
        }

        return true;
    }
}
