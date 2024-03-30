<?php

namespace App;

class Stack implements StackInterface
{
    private $stack = array();

    public function __construct(...$elements)
    {
        $this->stack = array_reverse($elements);
    }

    public function push(...$elements): void
    {
        foreach ($elements as $element) {
            array_unshift($this->stack, $element);
        }
    }

    public function pop(): mixed
    {
        return array_shift($this->stack);
    }

    public function top(): mixed
    {
        return reset($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function copy(): Stack
    {
        $copy_stack = new Stack();
        $copy_stack->stack = $this->stack;

        return $copy_stack;
    }

    public function __toString(): string
    {
        $elements  = implode('->', $this->stack);
        return '[' . $elements . ']';
    }
}
