
class Grafo:
    def __init__(self, vertices):
        self.vertices = vertices
        self.grafo = [[0] * vertices for i in range(vertices)]

    def add_aresta(self, u: int, v: int):
        self.grafo[u - 1][v - 1] = 1
        self.grafo[v - 1][u - 1] = 1

    def show(self):
        for i in self.grafo:
            for j in i:
                print(j, end='')
            print('')
    
    def tem_ligacao(self, u: int, v: int):
        return self.grafo[u - 1][v - 1] == 1