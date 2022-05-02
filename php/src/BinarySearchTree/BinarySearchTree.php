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

            } else {
                // 1 caso separar em metodo
                if ($currentNode->getLeft() == null && $currentNode->getRight() == null) {
                    if ($dadNode === null) {
                        $this->root = null;
                    } else {
                        match ($dadNode->getLeft() === $currentNode) {
                            true => $dadNode->setLeft(null),
                            default => $dadNode->setRight(null),
                        };
                    }

                    // 2 caso separar em metodo
                } elseif ($currentNode->getLeft() === null && $currentNode->getRight() !== null || $currentNode->getLeft() !== null && $currentNode->getRight() === null) {
                    if ($dadNode === null) {
                        $this->root = match ($currentNode->getLeft() !== null) {
                            true => $currentNode->getLeft(),
                            default => $currentNode->getRight(),
                        };
                    } else {
                        if ($currentNode->getLeft() !== null) {
                            match ($dadNode->getLeft() && $dadNode->getLeft()->getLabel() === $currentNode->getLabel()) {
                                true => $dadNode->setLeft($currentNode->getLeft()),
                                default => $dadNode->setRight($currentNode->getLeft()),
                            };
                        } else {
                            match ($dadNode->getLeft() && $dadNode->getLeft()->getLabel() === $currentNode->getLabel()) {
                                true => $dadNode->setLeft($currentNode->getRight()),
                                default => $dadNode->setRight($currentNode->getRight()),
                            };
                        }
                    }
                    // 3 caso separar em metodo
                } elseif ($currentNode->getLeft() !== null && $currentNode->getRight() !== null) {

                }
                break;
            }
        }
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
