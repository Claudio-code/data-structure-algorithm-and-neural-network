<?php

namespace Claudiosilvajunior\Php\Queue;

class Queue
{
    private array $queue = [];
    private int $lengthQueue = 0;

    public function push(mixed $element): void
    {
        $this->queue[] = $element;
        $this->lengthQueue++;
    }

    public function empty(): bool
    {
        return $this->lengthQueue === 0;
    }

    public function pop(): void
    {
        if ($this->empty()) {
            return;
        }

        array_shift($this->queue);
        $this->lengthQueue--;
    }

    public function length(): int
    {
        return $this->lengthQueue;
    }

    public function front(): mixed
    {
        if ($this->empty()) {
            return null;
        }

        return $this->queue[0];
    }
}