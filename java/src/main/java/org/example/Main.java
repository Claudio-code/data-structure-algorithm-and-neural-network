package org.example;

import org.example.deck.DeckRun;
import org.example.queue.QueueRun;
import org.example.stack.StackRun;

public class Main {
    public static void main(String[] args) {
        DeckRun.run();
        StackRun.run();
        QueueRun.run();
    }
}
