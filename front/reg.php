<h1 class="ct">會員註冊</h1>
<form>
    <table class="all">
        <tr>
            <td class="tt ct">姓名</td>
            <td class="pp"><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td class="tt ct">帳號</td>
            <td class="pp"><input type="text" name="acc" id="acc"><input type="button" value="檢測帳號" onclick="chkAcc()"></td>
        </tr>
        <tr>
            <td class="tt ct">密碼</td>
            <td class="pp"><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td class="tt ct">電話</td>
            <td class="pp"><input type="text" name="tel" id="tel"></td>
        </tr>
        <tr>
            <td class="tt ct">住址
            </td>
            <td class="pp"><input type="text" name="addr" id="addr"></td>
        </tr>
        <tr>
            <td class="tt ct">電子信箱</td>
            <td class="pp"><input type="text" name="email" id="email"></td>
        </tr>
    </table>

    <div class="ct"><input type="button" value="註冊" onclick="reg()"><input type="reset" value="重置"></div>
</form>

<script>

function reg(){
    let acc=$("#acc").val();
    $.get("api/chk_acc.php",{acc},function(res){
        if(parseInt(res)===1){
            alert("帳號已存在")
        }else{
            let name=$("#name").val();
            let pw=$("#pw").val();
            let tel=$("#tel").val();
            let addr=$("#addr").val();
            let email=$("#email").val();

            $.post("api/reg.php",{acc,name,pw,tel,addr,email},function(){
                location.href="?do=login"
            })
        }
    })
}

function chkAcc(){
    let acc=$("#acc").val();
    $.get("api/chk_acc.php",{acc},function(res){
        if(parseInt(res)===1){
            alert("帳號已存在")
        }else{
            alert("帳號可申請")
        }
    })
}
</script>