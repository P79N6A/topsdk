<?php

/**
 * 商品的列表
 * @author auto create
 */
class Offer
{
	
	/** 
	 * 代销价格
	 **/
	public $agent_price;
	
	/** 
	 * 打点信息
	 **/
	public $alg;
	
	/** 
	 * 90天成交笔数
	 **/
	public $booked_count;
	
	/** 
	 * 公司名
	 **/
	public $company_name;
	
	/** 
	 * 商品的详情地址（PC上商品详情页地址）
	 **/
	public $detail_url;
	
	/** 
	 * 发布时间
	 **/
	public $gmt_post;
	
	/** 
	 * 商品的Id
	 **/
	public $id;
	
	/** 
	 * 商品的图片地址（PC上的图片地址）
	 **/
	public $image_url;
	
	/** 
	 * 无线上的商品图片地址，返回值如http://XXX.jpg，无线前端可自行设置图片大小，如设置取270图片地址变为：http://XXX.jpg_270x270xzq60.jpg
	 **/
	public $image_url_mobile;
	
	/** 
	 * 会员id
	 **/
	public $member_id;
	
	/** 
	 * 商品的价格
	 **/
	public $price;
	
	/** 
	 * 月销售件数
	 **/
	public $quantity_sum_month;
	
	/** 
	 * 商品的标题
	 **/
	public $subject;	
}
?>