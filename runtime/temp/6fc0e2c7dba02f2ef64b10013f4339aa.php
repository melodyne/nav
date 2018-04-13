<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:60:"D:\xampp\htdocs\yunsuDoc/application/home\view\task\add.html";i:1477215089;s:58:"D:\xampp\htdocs\yunsuDoc/application/home\view\layout.html";i:1474695695;s:58:"D:\xampp\htdocs\yunsuDoc/application/home\view\header.html";i:1476894412;s:56:"D:\xampp\htdocs\yunsuDoc/application/home\view\left.html";i:1476801953;s:58:"D:\xampp\htdocs\yunsuDoc/application/home\view\footer.html";i:1469345382;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>云宿开发文档</title>
</head>

<link rel="stylesheet" href="/public/home/css/yunyou.css" type="text/css"  />
<script type="text/javascript" charset="utf-8" src="/public/home/js/jquery-2.1.4.min.js"></script>

<body>
<div id="Container">
    <div id="Header">
        <?php require_once 'public/menu.php';?>
        <div id="logo"></div>
    </div>
    <!-- 内容开始 -->
    <div id="Content">
<!-- 左边开始 -->
<script src="/public/home/js/task.js"></script>
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

	<div class="round-none">
           <div class="vi">
               <lable>今日任务</lable>
            </div>
            <hr style="height:1px;border:none;border-top:1px dashed #ccc;">
            <table id="tasks" <?php echo $taskid; ?> style="text-align:center">
	            <tbody  id="paras">
		            
		             <?php if($taskList==null): ?>
			             <script type="text/javascript">
			             	addTask();
			             	addTask();
			             </script>
		             <?php else: ?>
			             <tr class="paras_title">
				             <th width="41px">序号</th>
				             <th width="100px">类型</th>
				             <th width="100px">模块</th>
				             <th width="350px">任务名称</th>
				             <th width="100px">进度</th>
				             <th></th>
			             </tr>
		             <?php if(is_array($taskList) || $taskList instanceof \think\Collection): $i = 0; $__LIST__ = $taskList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                         <tr class="paraval">
				             <td><div class="xuhao"><?php echo $key+1; ?></div></td>
				             <td>  
				             	<select name="type" style="width: 80px;height:21px;">
				             	     <option value=""></option>
						             <option <?php if($item['type'] == '新增功能'): ?> selected="true" <?php endif; ?> value="新增功能">新增功能</option>
						             <option <?php if($item['type'] == '新增界面'): ?> selected="true" <?php endif; ?> value="新增界面">新增界面</option>
						             <option <?php if($item['type'] == '完善功能'): ?> selected="true" <?php endif; ?> value="完善功能">完善功能</option>
						             <option <?php if($item['type'] == '美化界面'): ?> selected="true" <?php endif; ?> value="美化界面">美化界面</option>
						             <option <?php if($item['type'] == '删隐功能'): ?> selected="true" <?php endif; ?> value="删隐功能">删隐功能</option>
						             <option <?php if($item['type'] == 'bug优化'): ?> selected="true" <?php endif; ?> value="bug优化">bug优化</option>
						             <option <?php if($item['type'] == '软件测试'): ?> selected="true" <?php endif; ?> value="软件测试">软件测试</option>
						             <option <?php if($item['type'] == '搭建框架'): ?> selected="true" <?php endif; ?> value="搭建框架">搭建框架</option>
						             <option <?php if($item['type'] == '文档学习'): ?> selected="true" <?php endif; ?> value="文档学习">文档学习</option>
						             <option <?php if($item['type'] == '其它'): ?> selected="true" <?php endif; ?> value="其它">其它</option>
					             </select>
					         </td>
				             <td><input  name="module" value="<?php echo $item['module']; ?>" style="width: 80px;"></td>
				             <td><input name="task" value="<?php echo $item['task']; ?>" style="width: 300px;"></td>
				             <td><input name="progress" value="<?php echo $item['progress']; ?>" style="width: 50px;text-align:center"></td>
				             <td><img onclick="removeHtml(this)" width="20px" src="/public/home/images/del.png"></td>
			             </tr>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
		            
	             </tbody>
            </table>
			<div class="addpara" style="margin-top:10px"><img onclick="addTask()" width="37px" src="/public/home/images/add.jpg"></div>
			<div align="right" style="width:700px;margin:80px 0px 200px 0px">
				<label onclick="taskcommit()" class="taskcommit">提交任务</label>
				<label class="nocommit" onclick="nocommit()">放弃提交</label>
			</div>
       </div>
</div>
<!-- 右边结束 -->

    </div>
    <!-- 内容结束 -->

    <div class="Clear"></div>
    <div id="Footer">
       <div id="bottom">@云宿网络科技有限公司</div>
    </div>
</div>
</body>
</html>
