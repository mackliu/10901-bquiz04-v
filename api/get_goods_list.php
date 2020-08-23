<?php
include_once "../base.php";
$goods=$Goods->all();
?>
<table class="all">
    <tr class="tt ct">
        <td>編號</td>
        <td>商品名稱</td>
        <td>庫存量</td>
        <td>狀態</td>
        <td>操作</td>
    </tr>
<?php
foreach($goods as $good){
?>
    <tr class="pp ct">
        <td><?=$good['no'];?></td>
        <td><?=$good['name'];?></td>
        <td><?=$good['stock'];?></td>
        <td id="g<?=$good['id'];?>"><?=($good['sh']==1)?"販售中":"已下架";?></td>
        <td>
            <button onclick="location.href='?do=edit_goods&id=<?=$good['id'];?>'">修改</button><button onclick="del('goods',<?=$good['id'];?>)">刪除</button><br>
            <button onclick="sh(1,<?=$good['id'];?>)">上架</button><button onclick="sh(2,<?=$good['id'];?>)">下架</button>
        </td>
    </tr>
<?php
}
?>
</table>