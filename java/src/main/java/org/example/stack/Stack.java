package org.example.stack;

import java.util.ArrayList;
import java.util.List;

public class Stack {
    private List<String> stack;
    private int length = 0;

    public Stack() {
        stack = new ArrayList<>();
    }

    public boolean empty() {
        return stack.isEmpty();
    }

    public void push(String value) {
        stack.add(value);
        length++;
    }

    public int length() {
        return length;
    }

    public void pop() {
        if (empty()) return;

        stack.remove(position());
        length--;
    }

    public String top() {
        return stack.get(position());
    }

    public int position() {
        return length > 0 ? length - 1 : length;
    }
}
