<?php

//up方法->重置数组->过滤->最后一步上传

/**
 * 上传类
 * Class Upload
 */
class Upload {
	//保存错误的属性
	public $error = '';

	/**
	 * 上传
	 * @return bool
	 */
	public function up() {
		//1.重置数组
		$arr = $this->resetArr();
		//p($arr);exit;
		//2.过滤
		foreach ($arr as $v){
			//如果有不允许上传的文件
			if(!$this->filter($v)){
				//返回false
				return false;
			}
		}
		//3.移动上传
		foreach ( $arr as $v ) {
			$this->move($v);
		}
		return true;
	}

	/**
	 * 移动上传
	 * @param $v
	 */
	private function move($v){
		//获得类型例如：jpg
		$type = ltrim(strrchr($v['name'],'.'),'.');
		//文件名
		$filename = time() . mt_rand(0,99999) . '.' . $type;
		//上传目录
		$dir = './upload/' . date('ymd');
		is_dir($dir) || mkdir($dir,0777,true);
		//组合完整目录
		$path = $dir . '/' . $filename;
		//移动上传
		move_uploaded_file($v['tmp_name'],$path);
	}

	/**
	 * 过滤
	 * @param $v
	 */
	private function filter($v){
		//类型，大小，error的几种错误
		$type = ltrim(strrchr($v['name'],'.'),'.');
		$typeArr = ['jpg','png','jpeg'];
		switch (true){
			case $v['error'] == 4:
				$this->error = '没有文件被上传';
				return false;

			case !is_uploaded_file($v['tmp_name']):
				$this->error = '不是通过合法的HTTP上传';
				return false;


			//如果类型不允许
			case !in_array($type,$typeArr):
				$this->error = '类型不允许';
				return false;

			case $v['size'] > 2000000:
				$this->error = '文件超过2M';
				return false;

			case $v['error'] == 1:
				$this->error = '大小超过了 php.ini 中 upload_max_filesize 限制值';
				return false;

			case $v['error'] == 2:
				$this->error = '大小超过 HTML 表单中 MAX_FILE_SIZE 选项指定的值';
				return false;

			case $v['error'] == 3:
				$this->error = '文件只有部分被上传';
				return false;

			default:
				return true;

		}

	}

	/**
	 * 重组数组
	 */
	private function resetArr() {
		//p($_FILES);exit;
		//为了用户可以随便的更改file类型的input的name值
		$info = current( $_FILES );
		//p( $info );exit;
		//如果是多文件上传
		if ( is_array( $info['name'] ) ) {
			foreach ( $info['name'] as $k => $n ) {
				$arr[] = [
					'name'     => $n,
					'type'     => $info['type'][ $k ],
					'tmp_name' => $info['tmp_name'][ $k ],
					'error'    => $info['error'][ $k ],
					'size'     => $info['size'][ $k ],
				];
			}

		} else {//单文件上传
			$arr[] = $info;
		}

		return $arr;
	}


}