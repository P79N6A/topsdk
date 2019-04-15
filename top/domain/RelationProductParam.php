<?php

/**
 * 查询的入参
 * @author auto create
 */
class RelationProductParam
{
	
	/** 
	 * 买家用户信息
	 **/
	public $caller_info;
	
	/** 
	 * 分页的页数，以1为起点
	 **/
	public $page_num;
	
	/** 
	 * 分页时每页的数量
	 **/
	public $page_size;
	
	/** 
	 * 商品的发布日期
	 **/
	public $product_publish_time;
	
	/** 
	 * desc或者asc
	 **/
	public $product_sort_type;
	
	/** 
	 * 产品排序方式，仅支持publish_time或者score
	 **/
	public $product_sort_value;
	
	/** 
	 * 热卖分数，并不是热卖数量
	 **/
	public $score;
	
	/** 
	 * newOffer或者hotSale
	 **/
	public $search_domain;
	
	/** 
	 * 买家UserId
	 **/
	public $seller_user_id;	
}
?>