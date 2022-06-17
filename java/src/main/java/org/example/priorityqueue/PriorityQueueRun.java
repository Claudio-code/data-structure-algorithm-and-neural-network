package org.example.priorityqueue;

public class PriorityQueueRun {
    public static void run() {
        People p1 = new People("Marcos", 28);
        People p2 = new People("Catarina", 3);
        People p3 = new People("Pedro", 20);
        People p4 = new People("João", 35);

        PriorityQueue queue = new PriorityQueue();
        queue.push(p1);
        queue.push(p2);
        queue.push(p3);
        queue.push(p4);
        queue.show();

        queue.pop();
        queue.pop();

        System.out.println("\n");
        queue.show();
        queue.push(new People("Goku", 30));

        System.out.println("\n");
        queue.show();
    }
}
