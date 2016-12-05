<?php 
require_once 'HashTable.php';

$db = new HashTable(10);
$db->insert("dano", "Daniel Alberto Rejon Pardenilla");
$db->insert("roli", "Rolando Efrain Valencia Solis");
$db->insert("profe", "Arandi López Alonso");


echo $db->find("dano") . '<br>';
echo $db->find("roli") . '<br>';
$db->delete("roli");
echo $db->find("roli") . '<br>';


 ?>