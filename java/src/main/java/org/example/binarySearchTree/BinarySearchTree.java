package org.example.binarySearchTree;

public class BinarySearchTree {
    private Node root = null;

    public void insert(int label) {
        if (empty()) {
            emptyInsert(label);
            return;
        }
        recursivelyInsert(label);
    }

    private void recursivelyInsert(int label) {
        Node nodeToInsert = new Node(label);
        Node dadNode = null;
        Node currentNode = root;
        while (true) {
            if (currentNode != null) {
                dadNode = currentNode;
                if (nodeToInsert.getLabel() < currentNode.getLabel()) {
                    currentNode = currentNode.getLeft();
                } else {
                    currentNode = currentNode.getRight();
                }
            } else {
                if (nodeToInsert.getLabel() < dadNode.getLabel()) {
                    dadNode.setLeft(nodeToInsert);
                } else {
                    dadNode.setRight(nodeToInsert);
                }
            }
        }
    }

    public void remove(int label) {
        Node dadNode = null;
        Node currentNode = root;
        while (currentNode != null) {
            if (label != currentNode.getLabel()) {
                dadNode = currentNode;
                if (label < currentNode.getLabel()) {
                    currentNode = currentNode.getLeft();
                } else {
                    currentNode = currentNode.getRight();
                }
            } else {
                removeLastNode(currentNode, dadNode);
                removeMiddleNode(currentNode, dadNode);
                removeNodeWithChildren(currentNode, dadNode);
                break;
            }
        }
    }

    private void removeMiddleNode(Node currentNode, Node dadNode) {
        if (currentNode.getLeft() != null && currentNode.getRight() == null
            || currentNode.getLeft() == null && currentNode.getRight() != null) {
            if (dadNode == null) {
                if (currentNode.getLeft() != null) {
                    root = currentNode.getLeft();
                } else {
                    root = currentNode.getRight();
                }
                return;
            }
            if (currentNode.getLeft() != null) {
                if (dadNode.getLeft() != null && dadNode.getLeft().getLabel() == currentNode.getLabel()) {
                    dadNode.setLeft(currentNode.getLeft());
                } else {
                    dadNode.setRight(currentNode.getLeft());
                }
                return;
            }
            if (dadNode.getLeft() != null && dadNode.getLeft().getLabel() == currentNode.getLabel()) {
                dadNode.setLeft(currentNode.getRight());
            } else {
                dadNode.setRight(currentNode.getRight());
            }
        }
    }

    private void removeLastNode(Node currentNode, Node dadNode) {
        if (currentNode.getLeft() != null && currentNode.getRight() != null) {
            return;
        }
        if (dadNode == null) {
            root = null;
            return;
        }
        if (dadNode.getLeft() == currentNode) {
            dadNode.setLeft(null);
            return;
        }
        dadNode.setRight(null);
    }

    private void removeNodeWithChildren(Node currentNode, Node dadNode) {
        if (currentNode.getLeft() == null && currentNode.getRight() == null) {
            return;
        }
        Node dadSmallerNode = currentNode;
        Node smallerNode = currentNode.getRight();
        Node nextSmaller = currentNode.getRight().getLeft();
        while (nextSmaller != null) {
            dadSmallerNode = smallerNode;
            smallerNode = nextSmaller;
            nextSmaller = smallerNode.getLeft();
        }
        if (dadNode == null) {
            removeNodeWithChildrenWithDadNodeNull(currentNode, dadSmallerNode, smallerNode);
            return;
        }
        if (dadNode.getLeft() != null && dadNode.getLeft().getLabel() == currentNode.getLabel()) {
            dadNode.setLeft(smallerNode);
        } else {
            dadNode.setRight(smallerNode);
        }
        if (dadSmallerNode.getLeft() != null && dadSmallerNode.getLeft().getLabel() == smallerNode.getLabel()) {
            dadSmallerNode.setLeft(null);
        } else {
            dadSmallerNode.setRight(null);
        }
        smallerNode.setLeft(currentNode.getLeft());
        smallerNode.setRight(currentNode.getRight());
    }

    public void removeNodeWithChildrenWithDadNodeNull(Node currentNode, Node dadSmallerNode, Node smallerNode) {
        if (root.getRight().getLabel() == smallerNode.getLabel()) {
            root = smallerNode;
            return;
        }
        if (((dadSmallerNode.getLeft() != null) && (dadSmallerNode.getLeft().getLabel() == smallerNode.getLabel()))) {
            dadSmallerNode.setLeft(null);
        } else {
            dadSmallerNode.setRight(null);
        }
        smallerNode.setLeft(currentNode.getLeft());
        smallerNode.setRight(currentNode.getRight());
        root = smallerNode;
    }

    public void preOrderShow() {
        show(root);
    }

    private void show(Node currentNode) {
        if (currentNode == null) {
            return;
        }
        System.out.println(currentNode.getLabel() + "\n\n");
        show(currentNode.getLeft());
        show(currentNode.getRight());
    }

    private void emptyInsert(int label) {
        root = new Node(label);
    }

    private boolean empty() {
        return root == null;
    }

    public Node getRoot() {
        return root;
    }
}
