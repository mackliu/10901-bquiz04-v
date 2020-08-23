<?php include_once "../base.php";

$ans=$_GET['ans'];

if($ans==$_SESSION['ans']){
    echo 1;
}else{
    echo 0;
}

?>