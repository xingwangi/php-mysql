<?php
//1.不要在老师代码基础上写，全部重新打！！！
//2.每一代码必须加注释
//3.明天提问

//打印函数
function p($var){

	echo '<pre>';

	print_r($var);

	echo '</pre>';
}

p($_POST);
//如果$_POST为真，证明用户点了提交按钮“计算”
if($_POST){

	$num1 = $_POST['num1'];
	
	$num2 = $_POST['num2'];
	
	$yunsuan = $_POST['yunsuan'];
	
	switch ($yunsuan) {

		case '+':
			
			$result = $num1 + $num2;
			
			break;
	
		
		default:
			
			break;
	}

}



 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 </head>
 <body>
<div class="container" style="width: 400px;margin-top: 20px;">
<div class="alert alert-success" role="alert">
	结果： <?php echo isset($result) ? $result : 0; ?>
</div>
	 <form class="form-horizontal" action="" method="post">
		  <div class="form-group">
		    
		    <div class="col-sm-12">
		      <input type="text" class="form-control" id="inputEmail3" placeholder="请输入数字1" name="num1">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-12">
		     	<select name="yunsuan" id="" class="form-control" >
		     		<option value="+">加</option>
		     		<option value="-">减</option>
		     		<option value="*">乘</option>
		     		<option value="/">除</option>
		     	</select>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-12">
		      <input type="text" class="form-control" id="inputPassword3" placeholder="请输入数字2" name="num2">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <div class="col-sm-12">
		      <button type="submit" class="btn btn-info btn-block">计算</button>
		    </div>
		  </div>
	</form>
</div>



 </body>
 </html>