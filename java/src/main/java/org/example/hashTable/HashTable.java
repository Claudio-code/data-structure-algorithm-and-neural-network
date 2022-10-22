package org.example.hashTable;

import java.util.ArrayList;
import java.util.List;
import java.util.stream.IntStream;

public class HashTable {

    private final int tableSize;
    private final List<List<Integer>> table = new ArrayList<>();

    public HashTable(int tableSize) {
        if (tableSize < 1) {
            System.out.println("Error: table size must be positive number!");
            System.exit(1);
        }
        this.tableSize = tableSize;
        IntStream.rangeClosed(0, tableSize)
                .boxed()
                .forEach(index -> table.add(index, new ArrayList<>()));
    }

    private int hashFunc(int key) {
        return key % tableSize;
    }

    public void insert(int key) {
        table.get(hashFunc(key)).add(key);
    }

    public boolean search(int key) {
        final var tableByKey = table.get(hashFunc(key));
        System.out.println(tableByKey.toString());
        return tableByKey.stream().anyMatch(integer -> integer == key);
    }

    public void show() {
        for(List<Integer> internalList: table) {
            if (internalList != null) {
                for (Integer key : internalList) {
                    System.out.print(key + " ");
                }
                System.out.print("\n");
            }
        }
    }

    public List<List<Integer>> getTable() {
        return table;
    }

}
