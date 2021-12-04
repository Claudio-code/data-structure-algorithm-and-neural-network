package org.example.queue;

public class QueueRun {
    public static void run() {
        Queue queue = new Queue();
        queue.push("qwd");
        queue.push("llwq");
        queue.push("212");
        queue.push("fgg");

        System.out.println(queue.front());
        queue.pop();

        System.out.println(queue.front());
        queue.pop();

        System.out.println(queue.front());
    }
}
