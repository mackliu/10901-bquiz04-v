<h2>管理登入</h2>
<table class="all">
    <tr>
        <td class="tt">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="tt">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt">驗證碼</td>
        <td class="pp">
        <?php
                $a=rand(10,99);
                $b=rand(10,99);
                $_SESSION['ans']=$a+$b;
                echo $a . "+".$b ."=";
            ?>
        <input type="text" name="ans" id="ans">
        </td>
    </tr>
</table>
<div class="ct"><input type="button" value="確認" onclick="login()"></div>
<script>
function login(){
    let ans=$("#ans").val();

    $.get("api/chk_ans.php",{ans},function(res){
        if(parseInt(res)===1){
            let acc=$("#acc").val();
            let pw=$("#pw").val();
            $.get("api/chk_pw.php",{'table':'admin',acc,pw},function(res){
                if(parseInt(res)===1){
                    location.href="admin.php";
                }else{
                    alert("帳號或密碼錯誤，請重新登入")
                    location.reload()
                }
            })
        }else{
            alert("對不起，您輸入的驗證碼有誤，請重新登入")
            location.reload()
        }
    })
}


</script>