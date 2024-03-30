<?php

use App\Stack;

function compareStrings(string $str1, string $str2): bool
{
    return processString($str1) === processString($str2);
}

function processString(string $str): string
{
    $stack = new Stack();

    for ($i = 0, $n = strlen($str); $i < $n; $i++) {
        if ($str[$i] === '#') {
            $stack->pop();
        } else {
            $stack->push($str[$i]);
        }
    }

    return (string) $stack;
}
