<?php
include_once "../base.php";
$bigs=$Type->all(['parent'=>0]);

echo "<table class='all'>";
foreach($bigs as $big){
?>

<tr class="tt">
    <td id='t<?=$big['id'];?>'><?=$big['name'];?></td>
    <td class="ct">
        <button onclick=edit(<?=$big['id'];?>)>修改</button>
        
        <button onclick="del('type',<?=$big['id'];?>)">刪除</button>
    </td>
</tr>

<?php
    if($Type->count(['parent'=>$big['id']])>0){
        $mids=$Type->all(['parent'=>$big['id']]);
        foreach($mids as $mid){
        ?>

        <tr class="pp ct">
            <td id='t<?=$mid['id'];?>'><?=$mid['name'];?></td>
            <td>
                <button onclick=edit(<?=$mid['id'];?>)>修改</button>
                
                <button onclick="del('type',<?=$mid['id'];?>)">刪除</button>
            </td>
        </tr>
        
        <?php   
        }
    }
}
echo "</table>";

?>