<?php
class EntryController extends Controller {
	/**
	 * 默认首页
	 */
	public function index(){
		if(IS_POST){
		}
		$arcData = Model::get('arc');
		$tagData = Model::get('tag');
		$this->display(['arc'=>$arcData,'tag'=>$tagData]);
	}

	public function removeArc(){
		$sql = "DELETE FROM arc WHERE aid=" . $_GET['aid'];
		Model::e($sql);
		echo <<<str
<script>
alert('删除成功');
location.href = './index.php';
</script>
str;
		exit;

	}
}