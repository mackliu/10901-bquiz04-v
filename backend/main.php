<div class="ct"><button onclick="location.href='?do=add_admin'">新增管理員</button></div>

<table class="all">
    <tr class="tt ct">
        <td>帳號</td>
        <td>密碼</td>
        <td>管理</td>
    </tr>


<?php
$rows=$Admin->all();
foreach($rows as $row){
?>
    <tr class="pp ct">
        <td><?=$row['acc'];?></td>
        <td><?=str_repeat("*",strlen($row['pw']));?></td>
        <td>
        <?php
        if($row['acc']=='admin'){
            echo "此帳號為最高權限";
        }else{
        ?>
            <button onclick="location.href='?do=edit_admin&id=<?=$row['id'];?>'">修改</button>
            <button onclick="del('admin',<?=$row['id'];?>)">刪除</button>
        <?php
        }   
        ?>
        </td>
    </tr>


<?php
}


?>
</table>
<div class="ct"><button onclick="location.href='index.php'">返回</button></div>
