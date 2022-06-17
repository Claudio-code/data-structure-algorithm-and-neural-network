package org.example;

import org.example.binarySearchTree.BinarySearchTreeRun;
import org.example.deck.DeckRun;
import org.example.linkedList.LinkedListRun;
import org.example.priorityqueue.PriorityQueueRun;
import org.example.queue.QueueRun;
import org.example.stack.StackRun;

public class Main {
    public static void main(String[] args) {
        DeckRun.run();
        StackRun.run();
        QueueRun.run();
        LinkedListRun.run();
        BinarySearchTreeRun.run();
        PriorityQueueRun.run();
    }
}
