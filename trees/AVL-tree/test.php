<?php 
require_once 'AVLTree.php';

$tree = new AVLTree();

//This doesn't work
$tree->insert(3);
$tree->insert(5);
$tree->insert(6);
$tree->insert(12);
$tree->insert(7);


/** This works
$tree->insert(3);
$tree->insert(5);
$tree->insert(6);
$tree->insert(7);
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