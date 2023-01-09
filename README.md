<h3 align="center">
  :blue_heart: Data struture, algorithm :blue_heart:
</h3>

<hr>

# Asymptotic analysis

- The analysis small values has ignored and focus in big values of **n**.
  - f(n) = n + 10
- Small values of **n**, any algorithm cost little to be executed, even the inefficient algorithms.
- Mathematically speaking, the asymptotic analysis is method to describe behavior of the limits.
- It is desirable to express time consumption of algorithm without depending on language.
- Example, in sequential search, the number of times the query key is compared with the key of each record.
  - Worst case: f(n) = n
  - Mid case: f(n) = (n + 1) / 2
  - Best case: f(n) = 1
- The best case matches with small-time of execution about all possibles size inputs of **n**.
- The worst case matches with big time of execution about all possibles size inputs of **n**.
- The mid-case matches with average time of execution about all possibles size inputs of **n**.
  - It is one distribution of probabilistic about size of set **n**.

<hr>

- [Stack](#stack)
- [Queue](#queue)
- [Deck](#deck)
- [Linked List](#linked-list)
- [Binary Tree](#binary-tree)
- [Priority Queue](#priority-queue)
- [Binary Heap](#binary-heap)
- [Hash table](#hash-table)
- [Dictionary](#dictionary)

<hr>

<a id="stack"></a>
## Stack

- They are data structure LIFO type `Last-In-First-Out`, where the last element to be inserted will be the first to be retired. So a stack allows access to one item of data the last inserted. 

<hr>

<a id="queue"></a>
## Queue

- Queue is an abstract data structure, somewhat similar to Stacks. Unlike stacks, a queue is open at its ends. One end is always used to insert data (enqueue) and the is used to remove data (dequeue). Queue follows `First-In-First-Out` methodology. 

<hr>

<a id="deck"></a>
## Deck

- Deck is an irregular acronym of double-ended queue. Double-ended queues are sequence containers with dynamic sizes that can be expanded or contrasted on both ends.

<hr>

<a id="linked-list"></a>
## Linked List

- A linked list or a current list is a dynamic, linear data structure. It is composed of several cells that are interconnected through pointers, that is, each cell has a pointer that points to the memory address of the next cell.

<hr>

<a id="binary-tree"></a>
## Binary tree

- Is a data structure by: Or has no element. Or it has a distinct element, called the root, with two pointers to two different structures, called the left subtree and right subtree.

<hr>

<a id="priority-queue"></a>
## Priority queue

- It is a queue where each element has a priority. This priority determines the position of an element in the queue, so it determines who should be removed from the queue first.

<hr>

<a id="binary-heap"></a>
## Binary Heap

- The binary Heap is binary three complete or almost.
- Have a Min-heap e Max-heap.
  - Min-heap:
    - The value of each node is greater than or equal to its parent's value, the lowest value is in the root.
  - Max-heap:
    - The value of each node is lowest than or equal to its parent's value, the greater value is in the root.
  - The elements are arranged in heap so that the father always has greater or equal priority than their children's priority.


<hr>

<a id="hash-table"></a>
## Hash table

- Hash table is a data structure that associates lookup keys with values.
- It is also called a scatter or disclosure table.
- Purpose: do a quick search and get the desired value.

<hr>

<a id="dictionary"></a>
## Dictionary

- It is example of Hash table.
- Hash table is representation of associates arrays.
- each value have key associate.
- utilize one function hash to compute one index in slots of arrays.
