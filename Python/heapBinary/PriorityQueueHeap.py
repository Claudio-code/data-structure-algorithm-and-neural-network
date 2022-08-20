import heapq
import math
from io import StringIO

class PriorityQueueHeap:
    def __init__(self):
        self._queue = []
        self._index = 0
        
    def insert(self, item, priority):
        heapq.heappush(self._queue, (-priority, self._index, item))
        self._index += 1
        
    def remove(self):
        return heapq.heappop(self._queue)[-1]

    def show_tree(self, total_width=60, fill=' '):
        output = StringIO()
        last_row = -1
        for i, n in enumerate(self._queue):
            if i:
                row = int(math.floor(math.log(i+1, 2)))
            else:
                row = 0
            if row != last_row:
                output.write('\n')
            columns = 2**row
            col_width = int(math.floor((total_width * 1.0) / columns))
            output.write(str(n).center(col_width, fill))
            last_row = row
        print (output.getvalue())
        print ('-' * total_width)
