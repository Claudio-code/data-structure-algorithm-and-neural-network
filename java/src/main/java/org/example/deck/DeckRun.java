package org.example.deck;

public class DeckRun {
    public static void run() {
        var deck = new Deck();

        deck.pushFront("test2");
        deck.pushFront("house1");
        deck.pushBack("home3");
        deck.pushBack("work4");
        deck.show();

        System.out.println("\n\n");

        System.out.println(deck.front());
        System.out.println(deck.back());

        System.out.println("\n\n");

        deck.popBack();
        System.out.println(deck.front());
        System.out.println(deck.back());

        System.out.println("\n\n");

        deck.popFront();
        System.out.println(deck.front());
        System.out.println(deck.back());

        System.out.println("\n\n");

        deck.show();
    }
}
