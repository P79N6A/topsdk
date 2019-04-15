<?php

/**
 * 上传成功返回的图片信息
 * @author auto create
 */
class PicmanImageModel
{
	
	/** 
	 * 会员MemberId
	 **/
	public $account_id;
	
	/** 
	 * 相册ID
	 **/
	public $album_id;
	
	/** 
	 * 图片描述
	 **/
	public $description;
	
	/** 
	 * 添加时间
	 **/
	public $gmt_create;
	
	/** 
	 * 图片ID
	 **/
	public $id;
	
	/** 
	 * 图片URL(220x220)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
	 **/
	public $img_url220;
	
	/** 
	 * 图片URL(310x310)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
	 **/
	public $img_url310;
	
	/** 
	 * 图片URL(64x64)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
	 **/
	public $img_url64;
	
	/** 
	 * 图片URL(缩略图)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg
	 **/
	public $mini_img_url;
	
	/** 
	 * 图片名称
	 **/
	public $name;
	
	/** 
	 * relativeUrl
	 **/
	public $relative_url;
	
	/** 
	 * searchImgUriPath
	 **/
	public $search_img_uri_path;
	
	/** 
	 * 图片大小，单位为字节
	 **/
	public $size;	
}
?>