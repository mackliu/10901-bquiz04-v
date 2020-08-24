<?php

$g=$Goods->find($_GET['id']);

?>

<h2 class="ct"><?=$g['name'];?></h2>
<div class="goods " style="width:80%;margin:5px auto">
    <div style="float:left">
        
            <img src="img/<?=$g['img'];?>" style="width:350px;height:250px">
        
    </div>
    <div>分類:<?=$Type->find($g['big'])['name'] . ">" . $Type->find($g['mid'])['name'];?></div>
    <div>編號:<?=$g['no'];?></div>
    <div>價格:<?=$g['price'];?></div>
    <div>詳細說明:<?=nl2br($g['intro']);?></div>
    <div>庫存量:<?=$g['stock'];?></div>
</div>
<div class="ct tt" style="clear:both">
    購買數量: <input type="number" name="qt" id="qt" style="width:35px" value="1">
    <img src="icon/0402.jpg" style="cursor:pointer" id="buy"  data-g="<?=$g['id'];?>"> 
</div>
<script>
    $("#buy").on("click",function(){
        let qt=$("#qt").val();
        let id=$(this).data("g")
        location.href=`?do=buycart&id=${id}&qt=${qt}`;
    })


</script>
