<?php

/**
 * 关联卖家的商品信息
 * @author auto create
 */
class SimpleRelationProductInfo
{
	
	/** 
	 * 商品发布时间
	 **/
	public $offer_publish_time;
	
	/** 
	 * 关联卖家的商品ID
	 **/
	public $product_id;
	
	/** 
	 * 关联类型的描述对象
	 **/
	public $relation_descs;
	
	/** 
	 * 热卖分数，并不是热卖量
	 **/
	public $sale_score;	
}
?>