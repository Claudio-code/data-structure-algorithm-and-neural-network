<?php

namespace Claudiosilvajunior\Php\Queue;

class QueueRun
{
    public static function run(): void
    {
        $queue = new Queue();
        $queue->push(1);
        $queue->push(21);
        $queue->push('2131');

        var_dump($queue->front());
        $queue->pop();

        var_dump($queue->front());
        $queue->pop();

        var_dump($queue->front());
    }
}