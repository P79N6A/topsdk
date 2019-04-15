<?php

/**
 * 产品详细信息
 * @author auto create
 */
class OfferDetailInfo
{
	
	/** 
	 * 供货量
	 **/
	public $amount;
	
	/** 
	 * 可售数量
	 **/
	public $amount_on_sale;
	
	/** 
	 * 详情说明
	 **/
	public $details;
	
	/** 
	 * 商品详情地址
	 **/
	public $details_url;
	
	/** 
	 * 物流模板id
	 **/
	public $freight_template_id;
	
	/** 
	 * T:运费模板
D：运费说明
F：卖家承担运费
	 **/
	public $freight_type;
	
	/** 
	 * 审核通过时间
	 **/
	public $gmt_approved;
	
	/** 
	 * 创建日期
	 **/
	public $gmt_create;
	
	/** 
	 * 过期日期
	 **/
	public $gmt_expire;
	
	/** 
	 * 最近重发时间
	 **/
	public $gmt_last_repost;
	
	/** 
	 * 最近修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 商品图片列表
	 **/
	public $image_list;
	
	/** 
	 * 是否支持网上交易。首先需要类目支持，如果类目支持，需要有价格，供货总量，最小起订量。true：支持网上订购；false：不支持网上订购
	 **/
	public $is_offer_support_online_trade;
	
	/** 
	 * 是否图片私密
	 **/
	public $is_pic_auth_offer;
	
	/** 
	 * 是否价格私密
	 **/
	public $is_price_auth_offer;
	
	/** 
	 * 是否为私密offer的标志位。true：私密产品 false：普通产品
	 **/
	public $is_private;
	
	/** 
	 * 是否有私密信息
	 **/
	public $is_private_offer;
	
	/** 
	 * 是否为SKU商品
	 **/
	public $is_sku_offer;
	
	/** 
	 * 是否支持按照规格报价
	 **/
	public $is_sku_trade_supported;
	
	/** 
	 * 是否支持混批。true：支持混批；false：不支持混批
	 **/
	public $is_support_mix;
	
	/** 
	 * 卖家会员ID
	 **/
	public $member_id;
	
	/** 
	 * 商品ID
	 **/
	public $offer_id;
	
	/** 
	 * 状态。auditing：审核中；online：已上网；FailAudited：审核未通过；outdated：已过期；member delete(d)：用户删除；delete：审核删除
	 **/
	public $offer_status;
	
	/** 
	 * 所属叶子类目ID
	 **/
	public $post_categry_id;
	
	/** 
	 * 价格区间
	 **/
	public $price_ranges;
	
	/** 
	 * 交易币种
	 **/
	public $price_unit;
	
	/** 
	 * 商品属性信息
	 **/
	public $product_feature_list;
	
	/** 
	 * 单位重量
	 **/
	public $product_unit_weight;
	
	/** 
	 * 商品信息质量星级( 取值为1到5)。1：一星；2：二星；3：三星；4：四星；5：五星
	 **/
	public $quality_level;
	
	/** 
	 * 建议零售价
	 **/
	public $retail_price;
	
	/** 
	 * 已销售量
	 **/
	public $saled_count;
	
	/** 
	 * 发货地址id
	 **/
	public $send_goods_id;
	
	/** 
	 * SKU规格属性信息{fid:value}当有多个值时用"#"联接
	 **/
	public $sku_array;
	
	/** 
	 * sku图片信息
	 **/
	public $sku_pics;
	
	/** 
	 * 商品标题
	 **/
	public $subject;
	
	/** 
	 * 有效期(单位：天)
	 **/
	public $term_offer_process;
	
	/** 
	 * 贸易类型。1：产品，2：加工，3：代理，4：合作，5：商务服务
	 **/
	public $trade_type;
	
	/** 
	 * 支持的交易方式。当isOfferSupportOnlineTrade为true的时候本字段有效：Escrow:支付宝担保交易； PreCharge：支付宝预存款交易；ForexPay：支付宝境外支付交易；多种交易方式间通过;分隔。
	 **/
	public $trading_type;
	
	/** 
	 * 商品类型。Sale：供应信息，Buy：求购信息
	 **/
	public $type;
	
	/** 
	 * 计量单位
	 **/
	public $unit;
	
	/** 
	 * 单价
	 **/
	public $unit_price;	
}
?>