<?php include_once "../base.php";

$id=$_POST['id'];
unset($_SESSION['cart'][$id]);

?>