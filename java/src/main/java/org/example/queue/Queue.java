package org.example.queue;

import java.util.ArrayList;
import java.util.List;

public class Queue {
    private final List<String> queue;
    private int length = 0;

    public Queue() {
        queue = new ArrayList<>();
    }

    public Boolean empty() {
        return queue.isEmpty();
    }

    public int length() {
        return length;
    }

    public void push(String element) {
        queue.add(element);
        length++;
    }

    public void pop() {
        if (empty()) {
            return;
        }

        queue.remove(0);
        length--;
    }

    public String front() {
        return queue.get(0);
    }
}
