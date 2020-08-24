<?php

if(!empty($_GET['id'])){
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}

if(empty($_SESSION['mem'])){
    to("?do=login");
    exit();
}

if(empty($_SESSION['cart'])){
    echo "<h2 class='ct'>空的購物車，請回首頁選購商品</h2>";
    exit();
}



?>
<h2 class="ct"><?=$_SESSION['mem'];?>的購物車</h2>
<table class="all">
    <tr class="tt ct">
        <td>編號</td>
        <td>商品名稱</td>
        <td>數量</td>
        <td>庫存量</td>
        <td>單價</td>
        <td>小計</td>
        <td>刪除</td>
    </tr>
    <?php
    foreach($_SESSION['cart'] as $id => $qt){
        $g=$Goods->find($id);
    ?>
    <tr class="pp">
        <td><?=$g['no'];?></td>
        <td><?=$g['name'];?></td>
        <td><?=$qt;?></td>
        <td><?=$g['stock'];?></td>
        <td><?=$g['price'];?></td>
        <td><?=$g['price']*$qt;?></td>
        <td><img src="icon/0415.jpg" class='del' data-id="<?=$id;?>" style="cursor:pointer"></td>
    </tr>
    <?php
    }
    ?>
</table>
<div class="ct">
    <a href="index.php"><img src="icon/0411.jpg" alt=""></a>
    <a href="?do=checkout"><img src="icon/0412.jpg" alt=""></a>

</div>
<script>
$(".del").on("click",function(){
    let id=$(this).data('id')
    $.post("api/del_cart.php",{id},function(){
        location.href="?do=buycart";
    })
})


</script>