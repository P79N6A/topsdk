<?php

/**
 * 备忘录
 * @author auto create
 */
class Memo
{
	
	/** 
	 * 备忘 内容
	 **/
	public $content;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * gmt_create的数字格式
	 **/
	public $gmt_create_long;
	
	/** 
	 * 更新时间
	 **/
	public $gmt_modified;
	
	/** 
	 * gmt_modified的数字格式
	 **/
	public $gmt_modified_long;
	
	/** 
	 * 备忘ID
	 **/
	public $id;
	
	/** 
	 * 优先级，当前仅用1表示已标星。0为未标星
	 **/
	public $priority;
	
	/** 
	 * 提醒的方式。0-不提醒 1-提醒
	 **/
	public $remind_flag;
	
	/** 
	 * 提醒时间
	 **/
	public $remind_time;
	
	/** 
	 * remind_time的long类型
	 **/
	public $remind_time_long;
	
	/** 
	 * 发起人uid
	 **/
	public $sender_uid;	
}
?>