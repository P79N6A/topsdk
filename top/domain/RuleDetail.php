<?php

/**
 * 每个违规大类的详情
 * @author auto create
 */
class RuleDetail
{
	
	/** 
	 * 案例名称  可能为空. 优化必然为空
	 **/
	public $caseName;
	
	/** 
	 * 详细的处罚信息. 优化必然为空
	 **/
	public $punishModeStr;
	
	/** 
	 * 违规原因  可能为空
	 **/
	public $reason;
	
	/** 
	 * 违规大类名称
	 **/
	public $ruleName;
	
	/** 
	 * 小二提醒中的详情链接 可能为空
	 **/
	public $suggestUrl;
	
	/** 
	 * 小二提醒
	 **/
	public $suggestion;	
}
?>