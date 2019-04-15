<?php

/**
 * 返回结果；对于存在属性滥用的，会在OFFERLEVEL输出对应的作弊程度，没有作弊的会标示为NONE.其他字段会标示具体的引起属性滥用的原因以及具体的属性KEY和VALUE
 * @author auto create
 */
class Plan
{
	
	/** 
	 * 字段列表
	 **/
	public $fields;
	
	/** 
	 * plan name
	 **/
	public $plan_name;
	
	/** 
	 * simple
	 **/
	public $simple;
	
	/** 
	 * type
	 **/
	public $type;	
}
?>