<h1 class="ct">新增商品</h1>
<form action="api/save_goods.php" method="post" enctype="multipart/form-data">
<table class="all">
    <tr>
        <td class="tt ct">所屬大分類</td>
        <td class="pp"><select name="big" id="big"></select></td>
    </tr>
    <tr>
        <td class="tt ct">所屬中分類</td>
        <td class="pp"><select name="mid" id="mid"></select></td>
    </tr>
    <tr>
        <td class="tt ct">商品編號</td>
        <td class="pp">完成分類後自動分配</td>
    </tr>
    <tr>
        <td class="tt ct">商品名稱</td>
        <td class="pp"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
        <td class="tt ct">商品價格</td>
        <td class="pp"><input type="text" name="price" id="price"></td>
    </tr>
    <tr>
        <td class="tt ct">規格</td>
        <td class="pp"><input type="text" name="spec" id="spec"></td>
    </tr>
    <tr>
        <td class="tt ct">庫存量</td>
        <td class="pp"><input type="text" name="stock" id="stock"></td>
    </tr>
    <tr>
        <td class="tt ct">商品圖片</td>
        <td class="pp"><input type="file" name="img" id="img"></td>
    </tr>
    <tr>
        <td class="tt ct">商品介紹</td>
        <td class="pp"><input type="text" name="intro" id="intro"></td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="button" value="返回" onclick="location.href='?do=th'">
</div>
</form>