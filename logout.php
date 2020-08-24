<?php include_once "base.php";


switch($_GET['logout']){
    case "mem":
        unset($_SESSION['mem']);
    break;
    case "admin":
        
        unset($_SESSION['admin']);
    break;

}

to("index.php");
?>