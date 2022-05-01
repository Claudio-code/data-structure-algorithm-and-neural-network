<?php

namespace Claudiosilvajunior\Php\LinkedList;

class LinkedList
{
    private ?Node $first = null;
    private ?Node $last = null;
    private int $size = 0;

    public function hasPositionElement(int $position): bool
    {
        return $position >= 0 && $position < $this->size;
    }

    public function hasFirst(): bool
    {
        return $this->first !== null;
    }

    public function hasLast(): bool
    {
        return $this->last !== null;
    }

    public function length(): int
    {
        return $this->size;
    }

    public function empty(): bool
    {
        return $this->size === 0;
    }

    public function show(): void
    {
        $currentNode = $this?->first;
        while ($currentNode != null) {
            print_r("\n\n {$currentNode->getElement()} \n\n");
            $currentNode = $currentNode?->getNext();
        }
    }

    private function pushEmpty(string $element): void
    {
        $node = new Node();
        $node->setElement($element);
        $this->first = $node;
        $this->last = $node;
        $this->size++;
    }

    public function pushFront(string $element): void
    {
        if ($this->empty()) {
            $this->pushEmpty($element);
            return;
        }
        $node = new Node();
        $node->setElement($element);
        $node->setNext($this->first);
        $this->first = $node;
        $this->size++;
    }

     public function pushBack(string $element): void
     {
         if ($this->empty()) {
             $this->pushEmpty($element);
             return;
         }
         $node = new Node();
         $node->setElement($element);
         $this->last->setNext($node);
         $this->last = $node;
         $this->size++;
     }

     public function searchByPosition(int $position): Node
     {
         if (!$this->hasPositionElement($position)) {
             throw new \InvalidArgumentException("No has element in it position");
         }
         $actual = $this->first;
         for ($count = 1; $count < $position; $count++) {
                $actual = $actual?->getNext();
         }
         return $actual;
     }

     public function pushByPosition(int $position, string $element): void
     {
         if ($this->empty()) {
             $this->pushEmpty($element);
             return;
         }
         if ($position === $this->size || $position > $this->size) {
             $this->pushBack($element);
             return;
         }
         if ($position <= 0) {
             $this->pushFront($element);
             return;
         }
         $nodeToInsert = new Node();
         $nodeToInsert->setElement($element);
         $previousNode = $this->first;
         $currentNode = $this->first->getNext();
         $currentPosition = 1;
         while ($currentNode != null) {
             if ($currentPosition == $position) {
                 $nodeToInsert->setNext($currentNode);
                 $previousNode->setNext($nodeToInsert);
             }
             $previousNode = $currentNode;
             $currentNode = $currentNode?->getNext();
             $currentPosition++;

         }
         $this->size++;
     }
}
