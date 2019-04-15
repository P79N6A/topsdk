<?php

/**
 * 图片信息
 * @author auto create
 */
class Image
{
	
	/** 
	 * 会员ID
	 **/
	public $account_id;
	
	/** 
	 * 图片所属相册
	 **/
	public $album_id;
	
	/** 
	 * 图片上传时间
	 **/
	public $create_time;
	
	/** 
	 * 图片描述
	 **/
	public $description;
	
	/** 
	 * 图片ID
	 **/
	public $id;
	
	/** 
	 * 图片名称
	 **/
	public $name;
	
	/** 
	 * 图片大小，单位为字节
	 **/
	public $size;
	
	/** 
	 * 图片URL(原图)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
	 **/
	public $url;
	
	/** 
	 * 图片URL(150x150)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
	 **/
	public $url150;
	
	/** 
	 * 图片URL(220x220)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
	 **/
	public $url220;
	
	/** 
	 * 图片URL(310x310)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
	 **/
	public $url310;
	
	/** 
	 * 图片URL(64x64)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
	 **/
	public $url64;
	
	/** 
	 * 图片URL(缩略图)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
	 **/
	public $url_mini;	
}
?>