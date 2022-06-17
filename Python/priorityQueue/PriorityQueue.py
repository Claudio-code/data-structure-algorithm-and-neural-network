from People import People

class PriorityQueue:
    def __init__(self):
        self.items = []
        self.length = 0
    
    def empty(self):
        return self.length == 0
    
    def pop(self):
        if not self.empty():
            self.length -= 1
            return self.items.pop(0)

    def show(self):
        for people in self.items:
            print('Nome: %s' % people.getName())
            print('Prioridade: %s' % people.getPriority())

    def push(self, people):
        if self.empty():
            self._push_in_front(people)
        self._push_in_medium(people)

    def _push_in_front(self, people):
        self.items.append(people)
        self.length += 1
        return True
        
    def _push_in_medium(self, people):
        flag_push = False
        for i in range(self.length):
            if self.items[i].getPriority() < people.getPriority():
                self.items.insert(i, people)
                flag_push = True
                break
        if not flag_push:
            self.items.append(people)
        self.length += 1
