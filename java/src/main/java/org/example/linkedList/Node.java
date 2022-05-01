package org.example.linkedList;

public class Node {
    private String element;
    private Node next = null;

    public Node getNext() {
        return next;
    }

    public String getElement() {
        return element;
    }

    public void setElement(String element) {
        this.element = element;
    }

    public void setNext(Node next) {
        this.next = next;
    }
}
