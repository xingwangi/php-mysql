<?php
class EntryController extends Controller {
	/**
	 * 默认首页
	 */
	public function index(){
		if(IS_POST){
			$sql = "INSERT INTO arc (title) VALUES ('{$_POST['title']}')";
			Model::e($sql);
			echo <<<str
<script>
alert('添加成功');
location.href = './index.php';
</script>
str;
			exit;
		}
		$arcData = Model::get('arc');
		$tagData = Model::get('tag');
		$this->display(['arc'=>$arcData,'tag'=>$tagData]);
	}

	/**
	 * 删除
	 */
	public function removeArc(){
		$sql = "DELETE FROM arc WHERE aid=" . $_GET['aid'];
		if(Model::e($sql)){
			echo <<<str
<script>
alert('删除成功');
location.href = './index.php';
</script>
str;
			exit;
		}else{
			echo <<<str
<script>
alert('删除失败');
location.href = './index.php';
</script>
str;
			exit;
		}


	}

	/**
	 * 修改
	 */
	public function update(){
		$aid = $_GET['aid'];
		if(IS_POST){
			$sql = "UPDATE arc SET title='{$_POST['title']}' WHERE aid=$aid";
			Model::e($sql);
			echo <<<str
<script>
alert('修改成功');
location.href = './index.php';
</script>
str;
			exit;
		}
		$sql = "SELECT * FROM arc WHERE aid=$aid";
		$data = Model::q($sql);
		//二维数组变为一维数组
		$oldData = current($data);
		//compact('oldData')相当于 ['oldData'=>$oldData]
		$this->display(compact('oldData'));
	}

	/**
	 * 搜索功能
	 */
	public function search(){
		$wd = $_GET['wd'];
		//转义
		$wd = addslashes($wd);
		$sql = "SELECT * FROM arc WHERE title LIKE '%{$wd}%'";
		$data = Model::q($sql);
		$this->display(compact('data'));
	}
}