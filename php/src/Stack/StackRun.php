<?php

namespace Claudiosilvajunior\Php\Stack;

class StackRun
{
    public static function run(): void
    {
        $stack = new Stack();
        var_dump($stack->empty());
        $stack->push("house1");
        $stack->push("house2");
        $stack->push("house3");
        $stack->push("house4");
        var_dump($stack->top());

        $stack->pop();
        var_dump($stack->empty());
        var_dump($stack->top());
    }
}