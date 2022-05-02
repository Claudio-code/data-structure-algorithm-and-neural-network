<?php

namespace Claudiosilvajunior\Php\BinarySearchTree;

class BinarySearchTreeRun
{
    public static function run(): void
    {
        $tree = new BinarySearchTree();
        $tree->insert(8);
        $tree->insert(3);
        $tree->insert(1);
        $tree->insert(6);
        $tree->insert(4);
        $tree->insert(7);
        $tree->insert(10);
        $tree->insert(14);
        $tree->insert(13);
        $tree->preOrderShow();
    }
}