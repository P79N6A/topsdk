<?php

/**
 * 派单数据
 * @author auto create
 */
class DispatchOrderDto
{
	
	/** 
	 * 实际价格
	 **/
	public $actual_price;
	
	/** 
	 * 商品属性
	 **/
	public $attr_list;
	
	/** 
	 * 买家需求
	 **/
	public $buyer_attribute;
	
	/** 
	 * 买家ID
	 **/
	public $buyer_id;
	
	/** 
	 * 买家nick
	 **/
	public $buyer_nick;
	
	/** 
	 * 买家等级
	 **/
	public $buyer_rank;
	
	/** 
	 * 服务列表
	 **/
	public $dimension_list;
	
	/** 
	 * 派单id
	 **/
	public $dispatch_id;
	
	/** 
	 * 派单的超时时间
	 **/
	public $dispatch_timeout;
	
	/** 
	 * 商品id
	 **/
	public $item_id;
	
	/** 
	 * 商品库存
	 **/
	public $item_inventory;
	
	/** 
	 * 商品名称
	 **/
	public $item_name;
	
	/** 
	 * 商品图片
	 **/
	public $item_pic;
	
	/** 
	 * 商家价格
	 **/
	public $item_price;
	
	/** 
	 * 商家提供的权益
	 **/
	public $privilege;
	
	/** 
	 * 推荐理由
	 **/
	public $rec_reason;
	
	/** 
	 * 接单的超时时间
	 **/
	public $receive_timeout;
	
	/** 
	 * 服务IDs
	 **/
	public $sids;
	
	/** 
	 * 原始会话
	 **/
	public $source;
	
	/** 
	 * 派单状态
	 **/
	public $status;	
}
?>