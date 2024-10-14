from Grafo import Grafo

grafo_new = Grafo(5)

grafo_new.add_aresta(1, 3)
grafo_new.add_aresta(3, 4)
grafo_new.add_aresta(2, 3)
grafo_new.add_aresta(3, 5)
grafo_new.add_aresta(4, 5)
grafo_new.show()

print(grafo_new.tem_ligacao(1, 3))
