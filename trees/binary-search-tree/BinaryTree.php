<?php
require_once 'Node.php';

class BinaryTree {
  public $root = null;



  function insert($data) {
    if ($this->root == null) {
      $this->root = new Node($data);
    } else {
      $this->subtreeInsert($this->root, $data);
    }
  }

  function subtreeInsert($subroot, $data) {
    if ($data < $subroot->data) {
      
      if ($subroot->left == null) {
        $subroot->left = new Node($data);
        $subroot->left->parent = $subroot;
      } else {
        $this->subtreeInsert($subroot->left, $data);
      }

    } else {
      if ($subroot->right == null) {
        $subroot->right = new Node($data);
        $subroot->right->parent = $subroot;
      } else {
        $this->subtreeInsert($subroot->right, $data);
      }
    }
  }





  function preorder() {
    $array = array();
    $array = $this->recursivePreorder($array, $this->root);
    return $array;
  }

  function recursivePreorder($array, $node) {
    if ($node != null) {
      array_push($array, $node->data);
      $array = $this->recursivePreorder($array, $node->left);
      $array = $this->recursivePreorder($array, $node->right);
    }
    return $array;
  } 





  function inorder() {
    $array = array();
    $array = $this->recursiveInorder($array, $this->root);
    return $array;
  }

  function recursiveInorder($array, $node) {
    if ($node != null) {
      $array = $this->recursiveInorder($array, $node->left);
      array_push($array, $node->data);
      $array = $this->recursiveInorder($array, $node->right);
    }
    return $array;
  }






  function postorder() {
    $array = array();
    $array = $this->recursivePostorder($array, $this->root);
    return $array;
  }

  function recursivePostorder($array, $node) {
    if ($node != null) {
      $array = $this->recursivePostorder($array, $node->left);
      $array = $this->recursivePostorder($array, $node->right);
      array_push($array, $node->data);
    }
    return $array;
  }

  

}


 ?>