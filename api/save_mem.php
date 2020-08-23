<?php include_once "../base.php";

$Mem->save($_POST);
to("../admin.php?do=mem");
?>