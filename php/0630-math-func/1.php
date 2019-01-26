<?php
//include './functions1.php';
require './functions1.php';
echo '<span style="color: red">test</span>';
p(1);


//include 和 require
//相同点：都可以载入文件
//不同点：
//(1)include产生warning(警告)错误，代码还可以继续执行
//(2)require产生fatal(致命)错误，代码无法继续执行

