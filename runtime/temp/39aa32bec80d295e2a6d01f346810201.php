<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"D:\xampp\htdocs\yunsuDoc/application/home\view\project\index.html";i:1490535651;s:58:"D:\xampp\htdocs\yunsuDoc/application/home\view\layout.html";i:1474695695;s:58:"D:\xampp\htdocs\yunsuDoc/application/home\view\header.html";i:1490529886;s:58:"D:\xampp\htdocs\yunsuDoc/application/home\view\footer.html";i:1490525701;}*/ ?>
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
<link href="/public/home/css/basic.css" rel="stylesheet" type="text/css">
<link href="/public/home/css/left.css" rel="stylesheet" type="text/css">
<link href="/public/home/css/task.css" rel="stylesheet" type="text/css">
<script src="/public/home/js/left.js"></script>

<ul class="pro_left_nav">
	<?php if(is_array($projects) || $projects instanceof \think\Collection): $i = 0; $__LIST__ = $projects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?>
	<li><a <?php if($key == '0'): ?>class="hover"<?php endif; ?> href="<?php echo $pro['url']; ?>" target="iframe_a"><?php echo $pro['name']; ?></a></li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	<div align="center" style="line-height: 50px;color: #00AA00;font-weight: bold">全屏</div>
	<div id="lanPos"></div>
</ul>

<iframe id="iframe_a" name="iframe_a" frameborder="0" src="/example/html/demo_iframe.html" ></iframe>

<style>
	.pro_left_nav{
		width: 180px;
		left: 760px;
		position: absolute;
	}
	#lanPos{
		width: 215px;
		height: 44px;
		background-color: #ececec;
	}

	ul li{
		border-bottom: 1px solid #ececec;
	}
	iframe{
		margin: 0;
		padding: 0;
		width: 100%;
		height: 600px;
	}
</style>
<script>
	$("#iframe_a").height($(window).height()-65);
    $(window).load(function(){
        $("#Footer").remove();
    });
    window.onresize = function(){
        $("#iframe_a").height($(window).height()-65);
    }
</script>

            </div>
            <!-- 内容结束 -->

            <div class="Clear"></div>
            <div id="Footer" class="footer">
               <div id="bottom">@云宿网络科技有限公司</div>
            </div>
        </div>

    </body>
</html>
