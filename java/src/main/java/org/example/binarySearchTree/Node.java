package org.example.binarySearchTree;

public class Node {
    private int label;
    private Node left = null;
    private Node right = null;

    public Node(int label) {
        this.label = label;
    }

    public Node(int label, Node left, Node right) {
        this.label = label;
        this.left = left;
        this.right = right;
    }

    public int getLabel() {
        return label;
    }

    public void setLabel(int label) {
        this.label = label;
    }

    public Node getLeft() {
        return left;
    }

    public void setLeft(Node left) {
        this.left = left;
    }

    public Node getRight() {
        return right;
    }

    public void setRight(Node right) {
        this.right = right;
    }
}
