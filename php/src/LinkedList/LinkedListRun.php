<?php

namespace Claudiosilvajunior\Php\LinkedList;


class LinkedListRun
{
    public static function run(): void
    {
        $linkedList = new LinkedList();
        $linkedList->pushFront('Marcos 1');
        $linkedList->pushBack('Marcos 2');
        $linkedList->pushFront('Marcos 3');
        $linkedList->pushByPosition(1, 'Maria');
        $linkedList->show();
        $linkedList->popFirst();
        $linkedList->popByPosition(2);
        $linkedList->show();
    }
}
