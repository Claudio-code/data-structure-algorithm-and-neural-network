<?php

namespace Claudiosilvajunior\Php\Deck;

class Deck
{
    public function __construct(
        private array $deck = [],
        private int $length = 0,
    ){}

    public function empty(): bool
    {
        return $this->length === 0;
    }

    public function pushFront(mixed $element): void
    {
        array_unshift($this->deck, $element);
        $this->length++;
    }

    public function pushBack(mixed $element): void
    {
        array_push($this->deck, $element);
        $this->length++;
    }

    public function popFront(): void
    {
        if ($this->empty()) {
            return;
        }

        array_shift($this->deck);
        $this->length--;
    }

    public function popBack()
    {
        if ($this->empty()) {
            return;
        }

        array_pop($this->deck);
        $this->length--;
    }

    public function front(): mixed
    {
        return match ($this->empty()) {
            true => null,
            default => $this->deck[0],
        };
    }

    public function back(): mixed
    {
        return match ($this->empty()) {
            true => null,
            default => $this->deck[$this->length - 1],
        };
    }

    public function show(): void
    {
        print_r("\n");

        array_walk(
            $this->deck,
            fn (mixed $value) => print_r("$value, "),
        );

        print_r("\n");
    }
}
