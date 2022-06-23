
class People:
    def __init__(self, name, priority):
        self.name = name
        self.priority = priority

    def __str__(self):
        return self.name + " " + str(self.priority)

    def getName(self):
        return self.name

    def getPriority(self):
        return self.priority
