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





  function delete($data) {
    if ($this->root == null) {
      return false;
    } else {
      if ($data == $this->root->data) {
        $dummyRoot = new Node(null);
        $dummyRoot->left = $this->root;
        $result = $this->recursiveDelete($this->root, $dummyRoot, $data);
        $this->root = $dummyRoot->left;
        return $result;
      } else {
        return $this->recursiveDelete($this->root, null, $data);
      }
    }
  }

  function recursiveDelete($subroot, $parent, $data) {
    if ($data < $subroot->data) {
      
      if ($subroot->left != null) {
        $this->recursiveDelete($subroot->left, $subroot, $data);
      } else {
        return false;
      }

    } elseif ($data > $subroot->data) {
      
      if ($subroot->right != null) {
        $this->recursiveDelete($subroot->right, $subroot, $data);
      } else {
        return false;
      }

    } else {

      if ($subroot->left != null && $subroot->right != null) {
        $subroot->data = $this->findMin($subroot->right);
        $this->recursiveDelete($subroot->right, $subroot, $subroot->data);
      } elseif ($parent->left == $subroot) {
        $parent->left = ($subroot->left != null) ? $subroot->left : $subroot->right;
      } elseif ($parent->right == $subroot) {
        $parent->right = ($subroot->left != null) ? $subroot->left : $subroot->right;
      }

      return true;
    }
  }





  function findMax($subroot) {
    if ($subroot != null) {
      while ($subroot->right != null) {
        $subroot = $subroot->right;
      }
    }
    return $subroot->data;
  }

  function findMin($subroot) {
    if ($subroot != null) {
      while ($subroot->left != null) {
        $subroot = $subroot->left;
      }
    }
    return $subroot->data;
  }






}


 ?>