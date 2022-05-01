package org.example.linkedList;

public class LinkedList {
    private Node first = null;
    private Node last = null;
    private int size = 0;

    public boolean hasPositionElement(int position) {
        return position >= 0 && position < size;
    }

    public int length() {
        return size;
    }

    public boolean nextIsEmpty() {
        return first == null || first.getNext() == null;
    }

    public boolean empty() {
        return size == 0;
    }

    public void show() {
        Node currentNode = first;
        while (currentNode != null) {
            System.out.println("\n\n" + currentNode.getElement() + "\n\n");
            currentNode = currentNode.getNext();
        }
    }

    private void pushEmpty(String element) {
        Node node = new Node();
        node.setElement(element);
        first = node;
        last = node;
        size++;
    }

    public void pushFront(String element) {
        if (empty()) {
            pushEmpty(element);
            return;
        }
        Node node = new Node();
        node.setElement(element);
        node.setNext(first);
        first = node;
        size++;
    }

    public void pushBack(String element) {
        if (empty()) {
            pushEmpty(element);
            return;
        }
        Node node = new Node();
        node.setElement(element);
        last.setNext(node);
        last = node;
        size++;
    }

    public Node searchByPosition(int position) throws Exception {
        if (!hasPositionElement(position)) {
            throw new Exception("No has element in it position");
        }
        Node actual = first;
        for (int count = 1; count < position; count++) {
            actual = actual.getNext();
        }
        return actual;
    }

    public void pushByPosition(int position, String element) {
        if (empty()) {
            pushEmpty(element);
            return;
        }
        if (position == size || position > size) {
            pushBack(element);
            return;
        }
        if (position <= 0) {
            pushFront(element);
            return;
        }
        var nodeToInsert = new Node();
        nodeToInsert.setElement(element);
        var previousNode = first;
        var currentNode = first.getNext();
        var currentPosition = 1;
        while (currentNode != null) {
            if (currentPosition == position) {
                nodeToInsert.setNext(currentNode);
                previousNode.setNext(nodeToInsert);
            }
            previousNode = currentNode;
            currentNode = currentNode.getNext();
            currentPosition++;
        }
        size++;
    }

    public void popFirst() {
        if (nextIsEmpty()) {
            first = null;
            last = null;
            size--;
            return;
        }
        first = first.getNext();
        size--;
    }

    public void popByPosition(int position) {
        if (position == 0 || nextIsEmpty()) {
            popFirst();
            return;
        }
        var previousNode = first;
        var currentNode = first.getNext();
        var currentPosition = 1;
        while (currentNode != null) {
            if (currentPosition == position) {
                previousNode.setNext(currentNode.getNext());
                currentNode.setNext(null);
                break;
            }
            previousNode = currentNode;
            currentNode = currentNode.getNext();
            currentPosition++;
        }
        size--;
    }
}
