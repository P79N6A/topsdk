<?php

/**
 * 缺陷注释
 * @author auto create
 */
class BugComment
{
	
	/** 
	 * 注释人
	 **/
	public $author;
	
	/** 
	 * 注释所属缺陷的ID
	 **/
	public $bugId;
	
	/** 
	 * 添加时间.格式:yyyy-mm-dd hh:mm:ss
	 **/
	public $createdAt;
	
	/** 
	 * 注释详情
	 **/
	public $description;
	
	/** 
	 * 缺陷注释ID
	 **/
	public $id;
	
	/** 
	 * 是否对外展示
	 **/
	public $isPublic;
	
	/** 
	 * 修改时间.格式:yyyy-mm-dd hh:mm:ss
	 **/
	public $modifiedAt;
	
	/** 
	 * 注释之后状态
	 **/
	public $newStatus;
	
	/** 
	 * 注释之前状态。
	 **/
	public $oldStatus;
	
	/** 
	 * 注释序号。注释展示顺序，数据越小越靠前。要求是正整数。
	 **/
	public $position;	
}
?>