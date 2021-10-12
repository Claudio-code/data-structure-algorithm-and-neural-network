<?php

namespace Claudiosilvajunior\Php\Stack;

class Stack
{
    private array $stack = [];
    private int $length = 0;

    public function empty(): bool
    {
        return empty($this->stack);
    }

    public function length(): int
    {
        return $this->length;
    }

    public function push(mixed $value): void
    {
        $this->stack[] = $value;
        $this->length++;
    }

    public function pop(): void
    {
        if ($this->empty()) {
            return;
        }

        array_pop($this->stack);
        $this->length--;
    }

    public function top(): mixed
    {
        return $this->stack[$this->length - 1] ?? null;
    }
}