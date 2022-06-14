from People import People
from PriorityQueue import PriorityQueue

p1 = People('Marcos', 28)
p2 = People('Catarina', 3)
p3 = People('Pedro', 20)
p4 = People('João', 35)

pq = PriorityQueue()
pq.push(p1)
pq.push(p2)
pq.push(p3)
pq.push(p4)
pq.show()

pq.pop()
pq.pop()

print( '\n' )
pq.show()

pq.push(People('Goku', 30))

print( '\n' )
pq.show()
