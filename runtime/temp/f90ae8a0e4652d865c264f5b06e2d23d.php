<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:69:"D:\server\apache\2.4\htdocs\nav/application/home\view\user\login.html";i:1504847013;s:65:"D:\server\apache\2.4\htdocs\nav/application/home\view\layout.html";i:1504847013;s:65:"D:\server\apache\2.4\htdocs\nav/application/home\view\header.html";i:1504847013;s:63:"D:\server\apache\2.4\htdocs\nav/application/home\view\left.html";i:1504847013;s:65:"D:\server\apache\2.4\htdocs\nav/application/home\view\footer.html";i:1504847013;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>云宿开发文档</title>
</head>

<link rel="stylesheet" href="/public/home/css/yunyou.css" type="text/css"  />
<script type="text/javascript" charset="utf-8" src="/public/home/js/jquery-2.1.4.min.js"></script>

<body style="height: 100%">
<div id="Container">
    <div id="Header">
        <?php require_once 'public/menu.php';?>
    </div>
    <!-- 内容开始 -->
    <div id="Content">
<!-- 左边开始 -->
<div id="Content-Left">
  <link href="/public/home/css/basic.css" rel="stylesheet" type="text/css">
<link href="/public/home/css/left.css" rel="stylesheet" type="text/css">
<link href="/public/home/css/task.css" rel="stylesheet" type="text/css">
<script src="/public/home/js/left.js"></script>

<ul>
	<li><a <?php if($_GET['mc'] == '1'): ?>class="hover"<?php endif; ?> href="../task/show?mc=1">全体日报</a></li>
	<li><a <?php if($_GET['mc'] == '2'): ?>class="hover"<?php endif; ?> href="#">个人日报</a></li>
	<li><a <?php if($_GET['mc'] == '3'): ?>class="hover"<?php endif; ?> href="../task/add?mc=3">添加任务</a></li>
	<li><a <?php if($_GET['mc'] == '4'): ?>class="hover"<?php endif; ?> href="#">任务分析</a></li>
	<li><a <?php if($_GET['mc'] == '5'): ?>class="hover"<?php endif; ?> href="#">项目进度</a></li>
	<li><a <?php if($_GET['mc'] == '6'): ?>class="hover"<?php endif; ?> href="../user/login?mc=6">用户登录</a></li>
	<li><a <?php if($_GET['mc'] == '7'): ?>class="hover"<?php endif; ?> href="#">偏好设置</a></li>
	<div id="lanPos"></div>
</ul>	
</div>
<!-- 左边结束 -->

<!-- 右边开始 -->
<div id="Content-Main">

  <div align="right" ><?php echo $loginInfo; ?></div>
  <div align="center" style="margin:80px 0px 300px 0px;">
        <form class="login-form" action="../../api/user/login" method="post">
            <input type="text" name="account" placeholder="请输入用户名" ><br><br>
            <input type="password" name="password" placeholder="请输入密码"><br><br>
        </form>
        <button onclick="login()">登 陆</button>
        <button onclick="">注册</button>
        &nbsp; &nbsp; &nbsp;<a>忘记密码</a>
  </div>
  <script type="text/javascript">
    function login(){
        var iaco=$('input[name="account"]');
        var ipaw=$('input[name="password"]');
        
        var account=$.trim(iaco.val());
        var password=$.trim(ipaw.val());
    
        if(account.length<2){
          iaco.focus();
          alert("请输入2-20位字符的账户");
          return;
        }

        if(password.length<6||password.length>15){
          ipaw.focus();
          alert("请输入6-15位字符的密码");
          return;
        }

        var paras={account:account,password:password};
        $.post("../../api/user/login",paras,
        function(data,status){
          alert("数据：" + data['msg'] + "\n状态：" + status);
          if(data['code']==100){
            window.location.href="";
          }
        }
    );
  }
function logout(){
   $.get("../../api/user/logout",
        function(data,status){
          alert("数据：" + data['msg'] + "\n状态：" + status);
          if(data['code']==100){
            window.location.href="";
          }
        });
}

</script>
</div>
            </div>
            <!-- 内容结束 -->

            <div class="Clear"></div>
            <div id="Footer" class="footer">
               <div id="bottom">@云宿网络科技有限公司</div>
            </div>
        </div>

    </body>
</html>
