package org.example.dictionary;

import java.util.Hashtable;
import java.util.Map;

public class Main {
    public static void main(final String[] args) {
        final Map<String, Integer> dictionary = new Hashtable<>();
        dictionary.put("carlos", 21);
        dictionary.put("antonia", 31);
        dictionary.put("antonia", 19);
        dictionary.put("maria", 23);

        dictionary.forEach((key, value) -> {
            System.out.println(key);
            System.out.println(value);
        });

        if (dictionary.containsKey("carlos")) {

        }

        findKey("carlos", dictionary);
        dictionary.remove("maria");

        findKey("maria", dictionary);

    }

    private static void findKey(final String key, final Map<String, Integer> dictionary) {
        if (dictionary.containsKey(key)) {
            System.out.println("key found");
            return;
        }
        System.out.println("key not found");
    }

}
