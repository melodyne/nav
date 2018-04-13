<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:68:"D:\server\apache\2.4\htdocs\nav/application/home\view\task\show.html";i:1504847013;s:65:"D:\server\apache\2.4\htdocs\nav/application/home\view\layout.html";i:1504847013;s:65:"D:\server\apache\2.4\htdocs\nav/application/home\view\header.html";i:1504847013;s:63:"D:\server\apache\2.4\htdocs\nav/application/home\view\left.html";i:1504847013;s:65:"D:\server\apache\2.4\htdocs\nav/application/home\view\footer.html";i:1504847013;}*/ ?>
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
	<table class="showday">
		<tr>
		<td style="line-height: 23px;">2016<br>10月</td>
		<?php if(is_array($dayarr) || $dayarr instanceof \think\Collection): $i = 0; $__LIST__ = $dayarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['day']<=date('d')): if($item['week'] == '六'|| $item['week'] == '日'): ?>
					    <td><?php echo $item['week']; ?><br><span><?php echo $item['day']; ?></span></td>
					<?php else: ?>
					    <td><?php echo $item['week']; ?><br><span onclick="show('<?php echo $year; ?>','<?php echo $month; ?>','<?php echo $item['day']; ?>')" class="onwork"><?php echo $item['day']; ?></span></td>
					<?php endif; else: ?>
		            <td><?php echo $item['week']; ?><br><span class="follow-up"><?php echo $item['day']; ?></span></td>
		        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
		
		</tr> 
		<tr style="height:12px">
		<td></td>
		<?php if(is_array($dayarr) || $dayarr instanceof \think\Collection): $i = 0; $__LIST__ = $dayarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['day'] == $openday): ?>
		   	<td><span class="triangle-up"></span></td>
		   	<?php else: ?>
		   	<td></td> 
		   	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		
		</tr> 
	</table>
	<div class="show_task">
	<?php if($todayTasks): if(is_array($todayTasks) || $todayTasks instanceof \think\Collection): $i = 0; $__LIST__ = $todayTasks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
		<div class="round-white">
			<div class="developer"><?php echo $item['user']['authname']; ?></div>
			<?php if($item['tasks']): ?>
			<div  style='width:432px;height:260px;overflow:auto;'>
			<table class="task">
			    <?php if(is_array($item['tasks']['describe']) || $item['tasks']['describe'] instanceof \think\Collection): $i = 0; $__LIST__ = $item['tasks']['describe'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item2): $mod = ($i % 2 );++$i;?>
			    <tr>
					<td width="10px"><?php echo $key+1; ?></td>
					<td width="65px"><?php echo $item2['type']; ?></td>
					<td><?php if($item2['module']!='无'): ?><?php echo $item2['module']; ?>-<?php endif; ?> <?php echo $item2['task']; ?><label class="progress"><?php echo $item2['progress']; ?>%</lable>
				</tr>
			    <?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			</div>
			<?php else: ?>
			<div>该开发者还没有提交当日工作任务</div>
            <?php endif; ?>
		</div>
	<?php endforeach; endif; else: echo "" ;endif; else: ?>
		<div class="noworkday">对不起，今天不是工作日，请查看其他时间的工作任务！</div>
	<?php endif; ?>		
	</div>

</div>

<script type="text/javascript">
function show(year,month,day){
	alert(year+month+day);
	location.href="show?mc=1&y="+year+"&m="+month+"&d="+day;
}
</script>
<!-- 右边结束 -->
            </div>
            <!-- 内容结束 -->

            <div class="Clear"></div>
            <div id="Footer" class="footer">
               <div id="bottom">@云宿网络科技有限公司</div>
            </div>
        </div>

    </body>
</html>
