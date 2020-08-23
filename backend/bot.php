<h1 class="ct">編輯頁尾版權區</h1>
<?php

if(!empty($_POST['bottom'])){
    $Bottom->save(['id'=>1,'bottom'=>$_POST['bottom']]);
}

?>

<form action="?do=bot" method="post">
    <table class="all">
        <tr>
            <td class="tt ct">頁尾宣告內容</td>
            <td class="pp"><input type="text" name="bottom" id="bot" value="<?=$Bottom->find(1)['bottom'];?>"></td>
        </tr>
    </table>
    <div class="ct">
        <input type="submit" value="確認">
        <input type="button" value="重置" onclick="cl()">
    </div> 
</form>

<script>
function cl(){
    $("#bot").val("")
}
</script>
