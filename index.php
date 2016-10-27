<?php 
require_once 'BinaryTree.php';
require_once 'BinarySearchTree.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Arboles Binarios</title>
</head>
<body>
<?php 

$tree = new BinarySearchTree;
$tree->insert("a");
$tree->insert("m");
$tree->insert("d");
$tree->insert("f");
$tree->insert("g");
$tree->insert("x");
$tree->insert("y");
$tree->insert("w");

$array = $tree->postorder();

foreach ($array as $element) {
  echo $element . ', ';
}

echo '<br>';

$tree = $tree->delete("x");

$array = $tree->postorder();

foreach ($array as $element) {
  echo $element . ', ';
}

 ?>
</body>
</html>