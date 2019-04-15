<?php

/**
 * 服务时间范围
 * @author auto create
 */
class ServiceTimeInfo
{
	
	/** 
	 * 日期格式 如：YYYY-MM-DD
	 **/
	public $date;
	
	/** 
	 * -1 表示今天已过期时间
	 **/
	public $day_tag;
	
	/** 
	 * 结束时间 如：20:00
	 **/
	public $end_time;
	
	/** 
	 * 最长取件时间 单位分钟 如：120
	 **/
	public $max_pickup_time;
	
	/** 
	 * 如果不可选择,通过这个提示原因
	 **/
	public $select_reason_code;
	
	/** 
	 * 该时段能否选择
	 **/
	public $selectable;
	
	/** 
	 * 客户端选择这个时间段, 给出的提示信息
	 **/
	public $selected_hint;
	
	/** 
	 * 开始时间 如：8:00
	 **/
	public $start_time;
	
	/** 
	 * timeOrder
	 **/
	public $time_order;	
}
?>