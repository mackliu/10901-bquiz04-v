<h1 class="ct">會員管理</h1>

<table class="all">
    <tr class="tt ct">
        <td>姓名</td>
        <td>會員帳號</td>
        <td>註冊日期</td>
        <td>操作</td>
    </tr>


<?php
$rows=$Mem->all();
foreach($rows as $row){
?>
    <tr class="pp ct">
        <td><?=$row['name'];?></td>
        <td><?=$row['acc'];?></td>
        <td><?=mb_substr($row['regdate'],0,10,'utf8');?></td>
        <td>
            <button onclick="location.href='?do=edit_mem&id=<?=$row['id'];?>'">修改</button>
            <button onclick="del('mem',<?=$row['id'];?>)">刪除</button>
        </td>
    </tr>


<?php
}


?>
</table>
<div class="ct"><button onclick="location.href='index.php'">返回</button></div>
