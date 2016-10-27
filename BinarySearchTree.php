<?php 
require_once 'BinaryTree.php';

class BinarySearchTree extends BinaryTree {



  function contains($data) {
    return $this->recursiveContains($this->root, $data);
  }

  function recursiveContains($subroot, $data) {
    if ($subroot == null) {
      return false;
    } else {
      if ($data == $subroot->data) {
        return true;
      } else if ($data > $subroot->data) {
        $this->recursiveContains($subroot->right, $data);
      } else {
        $this->recursiveContains($subroot->left, $data);
      }
    }
  }




  # TODO: Repair delete
  #       implement Node->parent
  function delete($data) {
    $this->recursiveDelete($this->root, $data);
  }

  function recursiveDelete($subroot, $data) {
    if ($subroot != null) {
      if ($data == $subroot->data) {
        $subroot = null;
      } else if ($data > $subroot->data) {
        $this->recursiveDelete($subroot->right, $data);
      } else {
        $this->recursiveDelete($subroot->left, $data);
      }
    }
    return $subroot;
  }

}


 ?>