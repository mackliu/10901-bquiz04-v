<?php include_once "../base.php";

$db=new DB($_GET['table']);
$acc=$_GET['acc'];
$pw=$_GET['pw'];
$chk=$db->count(['acc'=>$acc,'pw'=>$pw]);
if($chk>0){
    echo 1;
    $_SESSION[$_GET['table']]=$acc;
}else{
    echo 0;
}

?>