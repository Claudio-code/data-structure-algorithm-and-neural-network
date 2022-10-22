
import sys

class HashTable:
    
    def __init__(self, table_size):
        if table_size < 1:
            print('Error: table size must be positive number!')
            sys.exit(1)
        self.table_size = table_size
        self.table = [[] for i in range(table_size)]
    
    def hash_func(self, key):
        return key % self.table_size

    def insert(self, key):
        self.table[self.hash_func(key)].append(key)
    
    def show(self):
        for linked_list in self.table:
            if linked_list:
                for key in linked_list:
                    print('%d' % key, end='')
                print('')

    def search(self, key):
        if key in self.table[self.hash_func(key)]:
            return True
        return False
