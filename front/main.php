<?php
if(!empty($_GET['type'])){
    $type=$Type->find($_GET['type']);
    if($type['parent']==0){
        $nav=$type['name'];
        $goods=$Goods->all(['sh'=>1,'big'=>$_GET['type']]);
    }else{
        $nav=$Type->find($type['parent'])['name']." > ".$type['name'];
        $goods=$Goods->all(['sh'=>1,'mid'=>$_GET['type']]);        
    }

}else{
    $nav="全部商品";
    $goods=$Goods->all(['sh'=>1]);
}
?>

<h2><?=$nav;?></h2>
<?php
foreach($goods as $g){
?>
<div class="goods " style="width:80%;margin:5px auto;clear:both">
    <div style="float:left">
        <a href='?do=detail&id=<?=$g['id'];?>'>
            <img src="img/<?=$g['img'];?>" style="width:200px;height:150px">
        </a>
    </div>
    <div class="ct tt"><?=$g['name'];?></div>
    <div>價格:<?=$g['price'];?>
    <a style="float:right" href="?do=buycart&id=<?=$g['id'];?>&qt=1"><img src="icon/0402.jpg"></a>
    </div>
    <div>規格:<?=$g['spec'];?></div>
    <div>簡介:<?=mb_substr($g['intro'],0,30,'utf8');?>...</div>
</div>
<?php
}

?>