package org.example.deck;

import java.util.LinkedList;

public class Deck {
    private final LinkedList<String> deck;
    private int length = 0;

    public Deck() {
        this.deck = new LinkedList<>();
    }

    public boolean empty() {
        return deck.isEmpty();
    }

    public void pushFront(String element) {
        deck.addFirst(element);
        length++;
    }

    public void pushBack(String element) {
        deck.addLast(element);
        length++;
    }

    public void popFront() {
        if (empty()) {
            return;
        }

        deck.removeFirst();
        length--;
    }

    public void popBack() {
        if (empty()) {
            return;
        }

        deck.removeLast();
        length--;
    }

    public String front() {
        return deck.getFirst();
    }

    public String back() {
        return deck.getLast();
    }

    public void show() {
        deck.forEach(System.out::println);
    }
}
