<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:63:"D:\xampp\htdocs\yunsuDoc/application/home\view\index\index.html";i:1474698309;s:58:"D:\xampp\htdocs\yunsuDoc/application/home\view\layout.html";i:1474695695;s:58:"D:\xampp\htdocs\yunsuDoc/application/home\view\header.html";i:1490529886;s:58:"D:\xampp\htdocs\yunsuDoc/application/home\view\footer.html";i:1490525701;}*/ ?>
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
﻿<style type="text/css">
.left {
	float: left;
	width: 60%;
	height: 90%;
}

.right {
	float: right;
	width: 40%;
	height: 90%;
	text-align: center;
}

.content {
    width:80%;
	height:600px;
	margin:0px auto;
}

.tishi {
	margin: 70px;
	text-align: center;
	color: red;
}

a {
	text-decoration: underline;
}

.list_cont {
	margin: 15px;
}
</style>
<div class="content">
	<div class="left">
	<?php if(is_array($linksList) || $linksList instanceof \think\Collection): $i = 0; $__LIST__ = $linksList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$link): $mod = ($i % 2 );++$i;?>
		<div class="list_cont">
			<?php echo $link['lkname']; ?>&nbsp;<a clsass target="_blank"
				href="http://<?php echo $link['lkurl']; ?>">http://<?php echo $link['lkurl']; ?></a>
		</div>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>

	<div class="right">
		<div style="margin: 30px;">
			<img width="200px" src="css/app.png">
			<div style="text-align: center; margin-top: 20px;">测试APP二维码</div>
		</div>
	</div>
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
