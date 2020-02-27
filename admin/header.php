<!--
版权归属:XCSOFT
修改时间:2019/06/28
邮箱:contact#xcsoft.top(用@替换#)
如有任何问题欢迎联系!
-->
<?php
require_once('../config.php');
//包括上一个文件夹的config.php
session_start();
//开启session
$password = $_SESSION['password'];
?>
<link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
<body background="../assets/img/background.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo($title);?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.3/css/mdui.min.css">
    <script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.3/js/mdui.min.js"></script>
    <style>
    a {
      text-decoration:none
    }
    a:hover {
      text-decoration:none
    }
  </style>
   <?php
   if ($_SESSION['password'] !== $passwd) {
    //判断是否登录
    header("Refresh:0;url=\"./login.php\"");
    exit();
}
?>
    <div class="mdui-tab mdui-tab-full-width mdui-tab-centered">
        <?php
        echo("<a href=\"./index.php\" class=\"mdui-ripple\">管理首页</a>");
        echo("<a href=\"./ban.php\" class=\"mdui-ripple\">BAN</a>");
        echo("<a href=\"./control.php\" class=\"mdui-ripple\">短域管理</a>");
        echo("<a href=\"./update.php\" class=\"mdui-ripple\">检查更新</a>");
        echo("<a href=\"./logout.php\" class=\"mdui-ripple\">退出登录</a>");
        echo("<a href=\"../index.php\" class=\"mdui-ripple\">返回前台</a>");
        ?>
    </div>