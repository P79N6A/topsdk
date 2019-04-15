<?php

/**
 * 用户图片空间信息
 * @author auto create
 */
class Profile
{
	
	/** 
	 * 会员ID
	 **/
	public $account_id;
	
	/** 
	 * 空间是否已满，T：已满 N：未满
	 **/
	public $is_full;
	
	/** 
	 * 已使用空间占总空间百分比，精确到小数点后两位。如占用30.31%，返回值为30.31
	 **/
	public $space_usage;
	
	/** 
	 * 总空间，单位为字节
	 **/
	public $total_space;
	
	/** 
	 * 已使用空间，单位为字节
	 **/
	public $used_space;	
}
?>