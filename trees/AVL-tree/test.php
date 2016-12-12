<?php 
require_once 'AVLTree.php';

$tree = new AVLTree();

//This doesn't work
$tree->insert(3);
$tree->insert(5);
$tree->insert(6);
$tree->insert(12);
$tree->insert(7);
//$e = $tree->root->right->right;
//echo "El dato es" . $e->parent->data;

echo "<pre>" . print_r($tree) . "</pre>";

/** This doesn't work
$tree->insert(5);
$tree->insert(8);
$tree->insert(6);
$tree->insert(3);
$tree->insert(7);
$tree->insert(11);
$tree->insert(9);
$tree->insert(12);
$tree->delete(8);
**/


if ($tree->contains(5)) {
  echo "Contiene 5!! <br>";
}

if ($tree->contains(12)) {
  echo "Contiene 12!! <br>";
}

echo "preorder: ";
$array = $tree->preorder();
foreach ($array as $element) {
  echo $element . ", ";
}
echo "<br>";

echo "inorder: ";
$array = $tree->inorder();
foreach ($array as $element) {
  echo $element . ", ";
}
echo "<br>";

echo "postorder: ";
$array = $tree->postorder();
foreach ($array as $element) {
  echo $element . ", ";
}
echo "<br>";

 ?>