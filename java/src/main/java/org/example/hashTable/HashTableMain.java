package org.example.hashTable;

public class HashTableMain {

    public static void main(String[] args) {
        var hashTable = new HashTable(9);
        hashTable.insert(19);
        hashTable.insert(28);
        hashTable.insert(20);
        hashTable.insert(5);
        hashTable.insert(33);
        hashTable.insert(15);

        hashTable.show();
        System.out.println(hashTable.search(5));

    }

}
