<?php

/**
 * 宝贝自定义解决方案VO
 * @author auto create
 */
class ItemKnowledgeSolutionVO
{
	
	/** 
	 * 主键ID
	 **/
	public $id;
	
	/** 
	 * 宝贝ID
	 **/
	public $item_id;
	
	/** 
	 * 自定义的问题
	 **/
	public $question;
	
	/** 
	 * 解决方案
	 **/
	public $solution;
	
	/** 
	 * 发送状态 1半自动 2全自动
	 **/
	public $solution_level;
	
	/** 
	 * stf 旺旺富文本格式的解决方案
	 **/
	public $solution_stf;
	
	/** 
	 * 关联 athena_item_knowledge_type 表的 type_key字段
	 **/
	public $type_key;
	
	/** 
	 * 主账号
	 **/
	public $user_nick;	
}
?>