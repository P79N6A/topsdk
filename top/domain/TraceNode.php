<?php

/**
 * 物流节点信息列表
 * @author auto create
 */
class TraceNode
{
	
	/** 
	 * 流转节点的时间 格式 yyyy-MM-dd HH:mm:ss
	 **/
	public $accept_time;
	
	/** 
	 * 事件/操作，事件包括：TRANSPORT，SIGN，UNSIGN
	 **/
	public $action;
	
	/** 
	 * 事件发生城市的省市区编码
	 **/
	public $area_code;
	
	/** 
	 * 地区编码规范（CN、GB）
	 **/
	public $encrypt;
	
	/** 
	 * 网点名称或分拨中心名称
	 **/
	public $facility_name;
	
	/** 
	 * 网点编号
	 **/
	public $facility_no;
	
	/** 
	 * 站点类型：1. 网点，2. 中转中心\分拨中心
	 **/
	public $facility_type;
	
	/** 
	 * 状态描述
	 **/
	public $remark;	
}
?>