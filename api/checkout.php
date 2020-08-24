<?php include_once "../base.php";

$_POST['goods']=serialize($_SESSION['cart']);
$_POST['no']=date("Ymd").rand(100000,999999);

$Ord->save($_POST);
unset($_SESSION['cart']);

?>
<script>
alert('訂購成功\n感謝您的選購')
location.href="../index.php";
</script>