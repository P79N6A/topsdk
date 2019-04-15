<?php

/**
 * 优化详细记录，每个商品可能会对应有多条优化详细记录，每个优化模型产出一条优化详细记录
 * @author auto create
 */
class AdviseDetail
{
	
	/** 
	 * 此项优化的详细说明链接
	 **/
	public $detail_url;
	
	/** 
	 * 记录创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 优化结束时间
	 **/
	public $gmt_end;
	
	/** 
	 * 记录修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 优化开始时间
	 **/
	public $gmt_start;
	
	/** 
	 * 处理的模型ID
	 **/
	public $ifd_id;
	
	/** 
	 * 宝贝优化原因
	 **/
	public $reason;
	
	/** 
	 * 优化大类
	 **/
	public $rule_type;
	
	/** 
	 * 优化大类名称
	 **/
	public $rule_type_name;
	
	/** 
	 * 宝贝优化建议
	 **/
	public $suggestion;	
}
?>