<?php

/**
 * 体检中心记录的列表表示
 * @author auto create
 */
class ListProcess
{
	
	/** 
	 * 当前的状态
	 **/
	public $current_state;
	
	/** 
	 * 后续的状态
	 **/
	public $follow_state;
	
	/** 
	 * 记录创建时间。yyyy-MM-dd hh:MM:ss
	 **/
	public $gmt_create;
	
	/** 
	 * 提醒或者处罚结束时间. yyyy-MM-dd hh:MM:ss
	 **/
	public $gmt_end;
	
	/** 
	 * 记录修改时间。yyyy-MM-dd hh:MM:ss
	 **/
	public $gmt_modified;
	
	/** 
	 * 提醒或者处罚开始时间. yyyy-MM-dd hh:MM:ss
	 **/
	public $gmt_start;
	
	/** 
	 * 对象ID. 商品查询是为商品ID, 店铺查询时为店铺ID
	 **/
	public $id;
	
	/** 
	 * 对象名称. 商品查询是为商品名称,店铺查询时为店铺名称
	 **/
	public $name;
	
	/** 
	 * 商品主图链接
	 **/
	public $pic_url;
	
	/** 
	 * 记录ID
	 **/
	public $process_id;
	
	/** 
	 * 记录类型。店铺记录没有该字段
	 **/
	public $process_type;
	
	/** 
	 * 违规编号。可能为空
	 **/
	public $punish_id;
	
	/** 
	 * 违规大类信息
	 **/
	public $rule_types;
	
	/** 
	 * 当前的状态。查询处罚是为空。SYS_PROCESS : 等待修改,SELLER_EDIT:待审核,CHECK_ERROR:审核未通过，CHECK_SUCCESS:审核通过
	 **/
	public $status;
	
	/** 
	 * 查询急需处理记录时:current_state升级为follow_state的时间;查询处罚记录时:为处罚的时间。可能为空
	 **/
	public $upgrade_time;
	
	/** 
	 * 处罚记录是否在体检中心提醒过
	 **/
	public $warned;	
}
?>