<?php

namespace App;

interface StackInterface
{
    public function push(...$elem): void;
    public function pop(): mixed;
    public function top(): mixed;
    public function isEmpty(): bool;
    public function copy(): Stack;
    public function __toString(): string;
}
