<?php

namespace Claudiosilvajunior\Php\Deck;

class DeckRun
{
    public static function run(): void
    {
        $deck = new Deck();

        $deck->pushFront("mwwmo");
        $deck->pushFront(02);
        $deck->pushBack(12);
        $deck->pushBack("dqdw");
        $deck->show();

        print_r($deck->front());
        print_r("\n");
        print_r($deck->back());

        $deck->popBack();
        print_r("\n");
        print_r($deck->front());
        print_r("\n");
        print_r($deck->back());

        $deck->popFront();
        print_r("\n ");
        print_r($deck->front());
        print_r("\n ");
        print_r($deck->back());
        print_r("\n");
        $deck->show();
    }
}
