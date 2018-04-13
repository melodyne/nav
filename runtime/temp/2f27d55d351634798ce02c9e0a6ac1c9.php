<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"D:\xampp\htdocs\yunsuDoc/app/home\view\index\index.html";i:1474691578;}*/ ?>
﻿
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>云游网API_首页</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<link rel="stylesheet" href="css/yunyou.css" type="text/css"
	media="screen" />
<script type="text/javascript" charset="utf-8"
	src="ueditor/third-party/jquery-1.10.2.min.js">
</script>
<script>
</script>
</head>
<style type="text/css">
.left {
	float: left;
	width: 60%;
	height: 90%;
}

.right {
	float: right;
	width: 40%;
	height: 90%;
}

.zhanshi {
	margin: 40px 30px 70px 60px;
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
<body>
	<?php require_once 'public/menu.php'?>
	
	<div class="left">
		<div class="zhanshi">
		<?php if(is_array($linksList) || $linksList instanceof \think\Collection): $i = 0; $__LIST__ = $linksList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$link): $mod = ($i % 2 );++$i;?>
			<div class="list_cont">
				<?php echo $link['lkname']; ?>&nbsp;<a clsass target="_blank"
					href="http://<?php echo $link['lkurl']; ?>">http://<?php echo $link['lkurl']; ?></a>
			</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>

	<div class="right">
		<div style="margin: 30px;">
			<img width="200px" src="css/app.png">
			<div style="width: 200px; text-align: center; margin-top: 20px;">测试APP二维码</div>
		</div>
	</div>

	<div class="tishi">注意：php版本5.3以上</div>
	<?php require_once 'public/footer.php';?>
</body>
</html>