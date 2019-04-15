<?php

/**
 * 返回橱窗Model
 * @author auto create
 */
class ShowWindowModel
{
	
	/** 
	 * 是否黑名单会员，true为黑名单，false不为黑名单
	 **/
	public $black_list_member_status;
	
	/** 
	 * 橱窗运算时间
	 **/
	public $gmt_create;
	
	/** 
	 * 会员ID
	 **/
	public $member_id;
	
	/** 
	 * 活动奖励橱窗数
	 **/
	public $sw_activity_count;
	
	/** 
	 * 奖励橱窗数
	 **/
	public $sw_award_count;
	
	/** 
	 * 奖励橱窗数原因
	 **/
	public $sw_award_count_reason;
	
	/** 
	 * 基准橱窗数
	 **/
	public $sw_base_count;
	
	/** 
	 * 基准橱窗数原因
	 **/
	public $sw_base_count_reason;
	
	/** 
	 * 扣减橱窗数
	 **/
	public $sw_reduce_count;
	
	/** 
	 * 扣减橱窗数原因
	 **/
	public $sw_reduce_count_reason;
	
	/** 
	 * 剩余橱窗数
	 **/
	public $sw_remain_count;
	
	/** 
	 * 橱窗总数
	 **/
	public $sw_total_count;
	
	/** 
	 * 已用橱窗数
	 **/
	public $sw_used_count;
	
	/** 
	 * 版本ID
	 **/
	public $version_id;	
}
?>