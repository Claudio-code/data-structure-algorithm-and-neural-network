package org.example.stack;

public class StackRun {
    public static void run() {
        var stack = new Stack();
        System.out.println(stack.empty());
        stack.push("casas");
        stack.push("novas");
        stack.push("listas");

        System.out.println(stack.empty());
        System.out.println(stack.top());

        stack.pop();
        stack.pop();
        stack.pop();
        System.out.println(stack.empty());
    }
}
