<?php

namespace Claudiosilvajunior\Php\BinarySearchTree;

class BinarySearchTree
{
    private ?Node $root = null;

    public function insert(int $label): void
    {
        match ($this->empty()) {
            true => $this->emptyInsert($label),
            default => $this->recursivelyInsert($label),
        };
    }

    private function recursivelyInsert(int $label): void
    {
        $nodeToInsert = new Node($label);
        $dadNode = null;
        $currentNode = $this->root;
        while (true) {
            if ($currentNode !== null) {
                $dadNode = $currentNode;
                $currentNode = match ($nodeToInsert->getLabel() < $currentNode->getLabel()) {
                    true => $currentNode->getLeft(),
                    default => $currentNode->getRight(),
                };
                continue;
            }
            match ($nodeToInsert->getLabel() < $dadNode->getLabel()) {
                true => $dadNode->setLeft($nodeToInsert),
                default => $dadNode->setRight($nodeToInsert),
            };
            break;
        }
    }

    public function remove(int $label): void
    {
        $dadNode = null;
        $currentNode = $this->root;
        while ($currentNode !== null) {
            if ($label !== $currentNode->getLabel()) {
                $dadNode = $currentNode;
                $currentNode = match ($label < $currentNode->getLabel()) {
                    true => $currentNode->getLeft(),
                    default => $currentNode->getRight(),
                };
                continue;
            }
            $this->removeLastNode($currentNode, $dadNode);
            $this->removeMiddleNode($currentNode, $dadNode);
            $this->removeNodeWithChildren($currentNode, $dadNode);
            break;
        }
    }

    public function removeMiddleNode(Node $currentNode, ?Node $dadNode = null): void
    {
        if ($currentNode->getLeft() !== null && $currentNode->getRight() === null
            || $currentNode->getLeft() === null && $currentNode->getRight() !== null) {
            if ($dadNode === null) {
                $this->root = match ($currentNode->getLeft() !== null) {
                    true => $currentNode->getLeft(),
                    default => $currentNode->getRight(),
                };
                return;
            }
            if ($currentNode->getLeft() !== null) {
                match ($dadNode->getLeft() && $dadNode->getLeft()->getLabel() === $currentNode->getLabel()) {
                    true => $dadNode->setLeft($currentNode->getLeft()),
                    default => $dadNode->setRight($currentNode->getLeft()),
                };
                return;
            }
            match ($dadNode->getLeft() && $dadNode->getLeft()->getLabel() === $currentNode->getLabel()) {
                true => $dadNode->setLeft($currentNode->getRight()),
                default => $dadNode->setRight($currentNode->getRight()),
            };
        }
    }

    public function removeLastNode(Node $currentNode, ?Node $dadNode = null): void
    {
        if ($currentNode->getLeft() !== null && $currentNode->getRight() !== null) {
            return;
        }
        if ($dadNode === null) {
            $this->root = null;
            return;
        }
        match ($dadNode->getLeft() === $currentNode) {
            true => $dadNode->setLeft(null),
            default => $dadNode->setRight(null),
        };
    }

    public function removeNodeWithChildren(Node $currentNode, ?Node $dadNode = null): void
    {
        if ($currentNode->getLeft() === null && $currentNode->getRight() === null) {
            return;
        }
        $dadSmallerNode = $currentNode;
        $smallerNode = $currentNode->getRight();
        $nextSmaller = $currentNode->getRight()?->getLeft();
        while ($nextSmaller !== null) {
            $dadSmallerNode = $smallerNode;
            $smallerNode = $nextSmaller;
            $nextSmaller = $smallerNode?->getLeft();
        }
        if ($dadNode === null) {
            $this->removeNodeWithChildrenWithDadNodeNull($currentNode, $dadSmallerNode, $smallerNode);
            return;
        }
        match ($dadNode->getLeft() && $dadNode->getLeft()->getLabel() === $currentNode->getLabel()) {
            true => $dadNode->setLeft($smallerNode),
            default => $dadNode->setRight($smallerNode),
        };
        match ($dadSmallerNode->getLeft() && $dadSmallerNode->getLeft()->getLabel() === $smallerNode->getLabel()) {
            true => $dadSmallerNode->setLeft(null),
            default => $dadSmallerNode->setRight(null),
        };
        $smallerNode->setLeft($currentNode->getLeft());
        $smallerNode->setRight($currentNode->getRight());
    }

    public function removeNodeWithChildrenWithDadNodeNull(Node $currentNode, Node $dadSmallerNode, Node $smallerNode): void
    {
        if ($this->root->getRight()->getLabel() === $smallerNode->getLabel()) {
            $smallerNode->setLeft($this->root->getLeft());
            $this->root = $smallerNode;
            return;
        }
        match ($dadSmallerNode->getLeft() && $dadSmallerNode->getLeft()->getLabel() === $smallerNode->getLabel()) {
            true => $dadSmallerNode->setLeft(null),
            default => $dadSmallerNode->setRight(null),
        };
        $smallerNode->setLeft($currentNode->getLeft());
        $smallerNode->setRight($currentNode->getRight());
        $this->root = $smallerNode;
    }

    public function preOrderShow(): void
    {
        $this->show($this->getRoot());
    }

    private function show(?Node $currentNode): void
    {
        if ($currentNode === null) {
            return;
        }
        print_r($currentNode->getLabel() . ", ");
        $this->show($currentNode->getLeft());
        $this->show($currentNode->getRight());
    }

    private function emptyInsert(int $label): void
    {
        $this->root = new Node($label);
    }

    private function empty(): bool
    {
        return empty($this->root);
    }

    public function getRoot(): ?Node
    {
        return $this->root;
    }
}
