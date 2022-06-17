package org.example.priorityqueue;

import java.util.ArrayList;
import java.util.List;

public class PriorityQueue {
    private List<People> queue;
    private int length = 0;
    
    public PriorityQueue() {
        this.queue = new ArrayList<>();
    }

    public boolean isEmpty() {
        return length == 0;
    }

    public void pop() {
        if (isEmpty()) {
            return;
        }
        queue.remove(0);
        length--;
    }

    public void show() {
        queue.forEach((people) -> {
            System.out.println(people.getName() + " " + people.getPriority());
        });
    }

    public void push(People people) {
        if (isEmpty()) {
            queue.add(people);
            length++;
            return;
        }
        if (!pushInMedium(people)) {
            queue.add(people);
            length++;
        }
    }

    private boolean pushInMedium(People people) {
        for (int i = 0; i < length; i++) {
            if (queue.get(i).getPriority() < people.getPriority()) {
                queue.add(i, people);
                length++;
                return true;
            }
        }
        return false;
    }
}
