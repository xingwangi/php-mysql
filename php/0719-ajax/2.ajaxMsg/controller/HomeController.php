<?php

class HomeController extends Controller {
	private $data;

	public function __construct() {
		$this->data = include "./data.php";
	}

	public function index() {
		$this->display( [ 'd' => $this->data ] );
	}

	/**
	 * 异步追加留言
	 */
	public function store() {
		if ( IS_POST ) {
			$_POST['time'] = date( 'y-m-d H:i:s' );
			$this->data[]  = $_POST;
			//获得最新一条留言的键名（下标）
			$key = max( array_keys( $this->data ) );

			//追加到数据库
			file_put_contents( './data.php', "<?php return " . var_export( $this->data, true ) . ";" );
			//给js返回最新的留言
			$str = <<<str
<tr>
    <td>{$_POST['content']}</td>
    <td>{$_POST['time']}</td>
    <td>{$_POST['nickname']}</td>
    <td>
        <a href="javascript:;" key="{$key}" class="edit">编辑</a>
        <a href="javascript:;" key="{$key}" class="remove">删除</a>
    </td>
</tr>
str;
			echo $str;

		}
	}

	/**
	 * 异步删除
	 */
	public function remove() {
		$id = $_GET['id'];
		unset( $this->data[ $id ] );
		file_put_contents( './data.php', "<?php return " . var_export( $this->data, true ) . ";" );
	}




	/**
	 * 异步编辑
	 */
	public function edit() {
		if ( IS_POST ) {
			//获得编辑哪一条
			$id = $_POST['id'];
			//旧数据
			$oldData = $this->data[$id];
			//之前的发布时间，不能覆盖
			$_POST['time'] = $oldData['time'];
			//修改
			$this->data[$id] = $_POST;
			//写入数据库
			file_put_contents( './data.php', "<?php return " . var_export( $this->data, true ) . ";" );
			echo json_encode($_POST,JSON_UNESCAPED_UNICODE);
		}
	}
}