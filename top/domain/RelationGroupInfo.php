<?php

/**
 * 关联的卖家的关联关系描述，比如是有买卖关系，是有关注关系等，该返回值可能会空，由API发布者决定需要暴露哪些详情
 * @author auto create
 */
class RelationGroupInfo
{
	
	/** 
	 * 关联关系的code
	 **/
	public $code;
	
	/** 
	 * 关联关系的描述
	 **/
	public $description;
	
	/** 
	 * 是否在这个code类型上有关联
	 **/
	public $related;	
}
?>