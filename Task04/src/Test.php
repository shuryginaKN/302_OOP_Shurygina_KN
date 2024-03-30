<?php

use App\Stack;

function runTest()
{

    $stack = new Stack(1, 2, 3);
    $temp = '[3->2->1]';
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $stack . PHP_EOL . PHP_EOL;

    $stack->push(4, 5);
    $temp = '[5->4->3->2->1]';
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $stack . PHP_EOL . PHP_EOL;

    $elem = $stack->pop();
    $temp = '[4->3->2->1]';
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $stack . PHP_EOL . PHP_EOL;
    $temp = '5';
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $elem . PHP_EOL . PHP_EOL;

    $elem = $stack->top();
    $temp = '[4->3->2->1]';
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $stack . PHP_EOL . PHP_EOL;
    $temp = '4';
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $elem . PHP_EOL . PHP_EOL;

    $elem = $stack->isEmpty();
    $temp = false;
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $elem . PHP_EOL . PHP_EOL;

    $stack_null = new Stack();
    $elem = $stack_null->isEmpty();
    $temp = true;
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $elem . PHP_EOL . PHP_EOL;

    $temp = new Stack(77, 33, 55);
    $stack_copy = $temp->copy();
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $stack_copy . PHP_EOL . PHP_EOL;

    $result = compareStrings("ab#c", "ade##c");
    $temp = true;
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $result . PHP_EOL . PHP_EOL;

    $result = compareStrings("ab#c", "c");
    $temp = false;
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $result . PHP_EOL . PHP_EOL;
}
