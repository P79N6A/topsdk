<?php

/**
 * 父订单包含的子订单列表
 * @author auto create
 */
class SubSupplyOrderInfo
{
	
	/** 
	 * 1688子订单号
	 **/
	public $b2b_sub_order_no;
	
	/** 
	 * 宝贝购卖数量
	 **/
	public $buy_amount;
	
	/** 
	 * Sku信息
	 **/
	public $inner_spec;
	
	/** 
	 * 是否扣减库存
	 **/
	public $is_inventory_cut;
	
	/** 
	 * 是否确认过SKU信息
	 **/
	public $is_sku_confirm;
	
	/** 
	 * 淘宝宝贝Id
	 **/
	public $item_id;
	
	/** 
	 * 淘宝宝贝名称
	 **/
	public $item_title;
	
	/** 
	 * 1688商品最高价
	 **/
	public $max_price;
	
	/** 
	 * 1688商品最低价
	 **/
	public $min_price;
	
	/** 
	 * offerId
	 **/
	public $offer_id;
	
	/** 
	 * 1688offer图片地址
	 **/
	public $offer_pic_url;
	
	/** 
	 * 1688商品状态
	 **/
	public $offer_status;
	
	/** 
	 * 1688商品名称
	 **/
	public $offer_title;
	
	/** 
	 * 中间表的主键
	 **/
	public $order_id;
	
	/** 
	 * tb购买数量
	 **/
	public $out_buy_amount;
	
	/** 
	 * 外部商品单价 单位：分
	 **/
	public $out_goods_price;
	
	/** 
	 * 外部Sku信息
	 **/
	public $outer_spec;
	
	/** 
	 * 宝贝图片地址
	 **/
	public $pic_url;
	
	/** 
	 * skuConfirm
	 **/
	public $sku_confirm;
	
	/** 
	 * spectId
	 **/
	public $spec_id;
	
	/** 
	 * 库存
	 **/
	public $stock;
	
	/** 
	 * 供应商Id
	 **/
	public $supplier_id;
	
	/** 
	 * 供应商昵称
	 **/
	public $supplier_nick_name;
	
	/** 
	 * 淘宝子订单号
	 **/
	public $tb_sub_order_no;	
}
?>