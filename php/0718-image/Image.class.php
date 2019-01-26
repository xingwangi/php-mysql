<?php
include '../functions.php';

class Image {
	/**
	 * 加盖水印
	 *
	 * @param $img
	 * @param $water
	 */
	public function water( $img, $water ) {
		//目标图资源************
		$dstInfo = getimagesize( $img );
		//目标图类型（jpeg）
		$dstType = ltrim( strrchr( $dstInfo['mime'], '/' ), '/' );
		//组合变量函数imagecreatefromjpeg,imagecreatefrompng
		$dstFn  = "imagecreatefrom{$dstType}";
		$dstImg = $dstFn( $img );


		//源图资源************
		$srcInfo = getimagesize( $water );
		//源图类型（jpeg）
		$srcType = ltrim( strrchr( $srcInfo['mime'], '/' ), '/' );
		//组合变量函数imagecreatefromjpeg,imagecreatefrompng
		$srcFn  = "imagecreatefrom{$srcType}";
		$srcImg = imagecreatefrompng( $water );

		//把水印图盖到大图上面
		//$dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h
		imagecopymerge( $dstImg, $srcImg, $dstInfo[0] - $srcInfo[0] - 10, $dstInfo[1] - $srcInfo[1] - 10, 0, 0, $srcInfo[0], $srcInfo[1], 10 );

		//另存水印图
		$fn = "image{$dstType}";
		//组合另存文件名
		$fileName = dirname( $img ) . '/water_' . basename( $img );
		$fn( $dstImg, $fileName );
	}

	/**
	 * 缩放图片
	 * @param $img
	 * @param $with
	 * @param $height
	 */
	public function thumb( $img, $with, $height ) {
		//目标图资源（画布）************
		$dstImg = imagecreatetruecolor( $with, $height );


		//源图资源（大图）************
		$srcInfo = getimagesize($img);
		$srcType = ltrim( strrchr( $srcInfo['mime'], '/' ), '/' );
		$fn = "imagecreatefrom{$srcType}";
		$srcImg  = $fn($img);

		//缩放
		//$dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h
		imagecopyresized($dstImg,$srcImg,0,0,0,0,$with,$height,$srcInfo[0],$srcInfo[1]);

		//另存
		$fn = "image{$srcType}";
		$fn($dstImg,dirname($img) . '/thumb_' . basename($img));
	}


}

$img = new Image();
//$img->water('./shanghai.jpg','./1.png');
$img->thumb( './katong.jpg', 300, 100 );






