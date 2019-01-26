<div>
	<!--    如果有$_SESSION['username']就算登陆，否则就没登陆-->
	<?php if(isset($_SESSION['username'])): ?>
		欢迎 <a href="?c=member&a=index" style="color: darkred"><?php echo $_SESSION['username'] ?></a> 归来！
		<a href="?c=member&a=logout">退出</a>
	<?php else: ?>
		<a href="?c=member&a=reg">注册</a>
		<a href="?c=member&a=login">登陆</a>
	<?php endif ?>

</div>
<hr>