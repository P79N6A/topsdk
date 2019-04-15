<?php

/**
 * 缺陷分类和接口人信息
 * @author auto create
 */
class BugCategory
{
	
	/** 
	 * 一级分类指派人
	 **/
	public $assignedTo;
	
	/** 
	 * 一级分类对应的自定义属性id
	 **/
	public $cfId;
	
	/** 
	 * 一级分类名称
	 **/
	public $name;
	
	/** 
	 * 二级分类及接口人数据
	 **/
	public $subLevels;	
}
?>