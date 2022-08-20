from PeoplePriorityQueueHeap import PeoplePriorityQueueHeap
from PriorityQueueHeap import PriorityQueueHeap

queue = PriorityQueueHeap()

queue.insert(PeoplePriorityQueueHeap("name"), 20)
queue.insert(PeoplePriorityQueueHeap("Pedro"), 16)
queue.insert(PeoplePriorityQueueHeap("Felipe"), 25)
queue.insert(PeoplePriorityQueueHeap("Carol"), 23)

queue.show_tree()
print(queue.remove())
queue.show_tree()
