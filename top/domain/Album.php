<?php

/**
 * 相册信息
 * @author auto create
 */
class Album
{
	
	/** 
	 * 会员ID
	 **/
	public $account_id;
	
	/** 
	 * 相册封面图片ID
	 **/
	public $cover_pic_id;
	
	/** 
	 * 相册封面图片URL
	 **/
	public $cover_pic_url;
	
	/** 
	 * 相册创建时间,格式为“yyyy-MM-dd”
	 **/
	public $create_date;
	
	/** 
	 * 相册描述
	 **/
	public $description;
	
	/** 
	 * 相册ID
	 **/
	public $id;
	
	/** 
	 * 相册中图片数量
	 **/
	public $image_count;
	
	/** 
	 * 相册名称
	 **/
	public $name;
	
	/** 
	 * 相册类型.CUSTOM-自定义相册 MY-我的相册 OFF-下架相册
	 **/
	public $type;	
}
?>