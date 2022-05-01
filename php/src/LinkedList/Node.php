<?php

namespace Claudiosilvajunior\Php\LinkedList;

class Node
{
    private string $element;
    private ?Node $next = null;

    public function getElement(): string
    {
        return $this->element;
    }

    public function setElement(string $element): void
    {
        $this->element = $element;
    }

    public function getNext(): ?Node
    {
        return $this?->next;
    }

    public function setNext(?Node $next): void
    {
        $this->next = $next;
    }
}
