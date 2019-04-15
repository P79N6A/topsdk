<?php

/**
 * 搜索参数
 * @author auto create
 */
class IsvDaixiaoOfferRequest
{
	
	/** 
	 * 当前页
	 **/
	public $current_page;
	
	/** 
	 * 是否降序，true降序，false升序
	 **/
	public $descend_order;
	
	/** 
	 * 关键词
	 **/
	public $keywords;
	
	/** 
	 * 每页大小
	 **/
	public $page_size;
	
	/** 
	 * 排序类型，取值：price,booked,post_time，分布代表价格排序、销量排序、发布时间排序
	 **/
	public $sort_type;	
}
?>