<?php include_once "base.php";?>
<?php
$admin=$Admin->find(['acc'=>$_SESSION['admin']]);
$pr=unserialize($admin['pr']);

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)?do=admin -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>┌精品電子商務網站」</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-3.4.1.js"></script>
    <script src="./js/js.js"></script>
</head>

<body>
    <iframe name="back" style="display:none;"></iframe>
    <div id="main">
        <div id="top">
            <a href="index.php">
                <img src="./icon/0416.jpg">
            </a>
            <img src="./icon/0417.jpg">
        </div>
        <div id="left" class="ct">
            <div style="min-height:400px;">
                <a href="?do=main">管理權限設置</a>
                <?php
                    if(in_array(1,$pr)){
                ?>
                <a href="?do=th">商品分類與管理</a>
                <?php
                }
                ?>
                <?php
                    if(in_array(2,$pr)){
                ?>
                <a href="?do=order">訂單管理</a>
                <?php
                }
                ?>
                <?php
                    if(in_array(3,$pr)){
                ?>
                <a href="?do=mem">會員管理</a>
                <?php
                }
                ?>
                <?php
                    if(in_array(4,$pr)){
                ?>
                <a href="?do=bot">頁尾版權管理</a>
                <?php
                }
                ?>
                <?php
                    if(in_array(5,$pr)){
                ?>
                <a href="?do=news">最新消息管理</a>
                <?php
                }
                ?>
                <a href="#" style="color:#f00;" onclick="location.href='logout.php?logout=admin'">登出</a>
            </div>
        </div>
        <div id="right">
		<?php
        $do=(!empty($_GET['do']))?$_GET['do']:"main";
        $file="backend/".$do.".php";
        if(file_exists($file)){
                include $file;
        }else{
                include "backend/main.php"; 
        }

        ?>
        </div>
        <div id="bottom" style="line-height:70px; color:#FFF; background:url(icon/bot.png);" class="ct">
		<?=$Bottom->find(1)['bottom'];?></div>
    </div>

</body>

</html>