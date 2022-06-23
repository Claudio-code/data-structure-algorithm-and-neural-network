package org.example.priorityqueue;

public class People {
    private String name;
    private int priority;

    public People(String name, int priority) {
        this.name = name;
        this.priority = priority;
    }

    public String getName() {
        return name;
    }

    public int getPriority() {
        return priority;
    }
}
