<?php

namespace Claudiosilvajunior\Php\BinarySearchTree;

class Node
{
    public function __construct(
        private int $label,
        private ?self $left = null,
        private ?self $right = null,
    ) {
    }

    public function getLabel(): int
    {
        return $this->label;
    }

    public function setLabel(int $label): void
    {
        $this->label = $label;
    }

    public function getLeft(): ?Node
    {
        return $this->left;
    }

    public function setLeft(?Node $left): void
    {
        $this->left = $left;
    }

    public function getRight(): ?Node
    {
        return $this->right;
    }

    public function setRight(?Node $right): void
    {
        $this->right = $right;
    }
}
