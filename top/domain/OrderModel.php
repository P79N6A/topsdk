<?php

/**
 * 订单列表
 * @author auto create
 */
class OrderModel
{
	
	/** 
	 * accountPeriodDate
	 **/
	public $account_period_date;
	
	/** 
	 * accountPeriodDateType
	 **/
	public $account_period_date_type;
	
	/** 
	 * accountPeriodExtendCount
	 **/
	public $account_period_extend_count;
	
	/** 
	 * aliloanSecurityFee
	 **/
	public $aliloan_security_fee;
	
	/** 
	 * 支付宝交易号
	 **/
	public $alipay_trade_id;
	
	/** 
	 * attributes
	 **/
	public $attributes;
	
	/** 
	 * belonging
	 **/
	public $belonging;
	
	/** 
	 * bizType
	 **/
	public $biz_type;
	
	/** 
	 * bizTypeEnum
	 **/
	public $biz_type_enum;
	
	/** 
	 * 买家支付宝id
	 **/
	public $buyer_alipay_id;
	
	/** 
	 * 买家公司名称
	 **/
	public $buyer_company_name;
	
	/** 
	 * 买家email
	 **/
	public $buyer_email;
	
	/** 
	 * 买家留言
	 **/
	public $buyer_feedback;
	
	/** 
	 * buyerFeedbackPath
	 **/
	public $buyer_feedback_path;
	
	/** 
	 * buyerFlag
	 **/
	public $buyer_flag;
	
	/** 
	 * 买家登录id
	 **/
	public $buyer_login_id;
	
	/** 
	 * 买家id
	 **/
	public $buyer_member_id;
	
	/** 
	 * buyerName
	 **/
	public $buyer_name;
	
	/** 
	 * 买家备注
	 **/
	public $buyer_order_memo;
	
	/** 
	 * buyerPhone
	 **/
	public $buyer_phone;
	
	/** 
	 * 买家评价状态。5未评价，4已评价
	 **/
	public $buyer_rate_status;
	
	/** 
	 * buyerSex
	 **/
	public $buyer_sex;
	
	/** 
	 * 买家数字id
	 **/
	public $buyer_user_id;
	
	/** 
	 * 运费，单位分
	 **/
	public $carriage;
	
	/** 
	 * certificateSumPayment
	 **/
	public $certificate_sum_payment;
	
	/** 
	 * 关闭原因
	 **/
	public $close_reason;
	
	/** 
	 * cod交易的实付款（买家实际支付给物流的费用）
	 **/
	public $cod_actual_fee;
	
	/** 
	 * 是否COD订单并且清算成功
	 **/
	public $cod_audit;
	
	/** 
	 * 买家承担的服务费
	 **/
	public $cod_buyer_fee;
	
	/** 
	 * 买家承担的服务费初始值
	 **/
	public $cod_buyer_init_fee;
	
	/** 
	 * cod服务费
	 **/
	public $cod_fee;
	
	/** 
	 * cod三家分润
	 **/
	public $cod_fee_dividend;
	
	/** 
	 * cod服务费初始值
	 **/
	public $cod_init_fee;
	
	/** 
	 * 卖家承担的服务费
	 **/
	public $cod_seller_fee;
	
	/** 
	 * cod状态。0:初始值，20:接单，-20:不接单，2:接单超时，30:揽收成功，-30:揽收失败，3:揽收超时，100:签收成功，-100:签收失败，10:订单等候发送给物流公司，-1:用户取消物流订单
	 **/
	public $cod_status;
	
	/** 
	 * creditCard
	 **/
	public $credit_card;
	
	/** 
	 * crossPromotionFee
	 **/
	public $cross_promotion_fee;
	
	/** 
	 * dataFromType
	 **/
	public $data_from_type;
	
	/** 
	 * 折扣，单位分
	 **/
	public $discount;
	
	/** 
	 * flowTemplateId
	 **/
	public $flow_template_id;
	
	/** 
	 * freightBillNo
	 **/
	public $freight_bill_no;
	
	/** 
	 * 确认时间
	 **/
	public $gmt_confirmed;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 发货时间
	 **/
	public $gmt_goods_send;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 支付时间
	 **/
	public $gmt_payment;
	
	/** 
	 * 买家签收时间(COD)
	 **/
	public $gmt_sign;
	
	/** 
	 * 订单号
	 **/
	public $id;
	
	/** 
	 * jinPiaoPayOrder
	 **/
	public $jin_piao_pay_order;
	
	/** 
	 * ladderGroup
	 **/
	public $ladder_group;
	
	/** 
	 * 物流单列表
	 **/
	public $logistics_order_list;
	
	/** 
	 * 物流状态。8:还未创建物流订单；1:未发货；2:已发货；3:已收货，交易成功；4:已经退货，交易失败；5:部分发货，交易成功
	 **/
	public $logistics_status;
	
	/** 
	 * myBankEFTPayOrder
	 **/
	public $my_bank_e_f_t_pay_order;
	
	/** 
	 * newComplaintStatus
	 **/
	public $new_complaint_status;
	
	/** 
	 * normalInstantFlag
	 **/
	public $normal_instant_flag;
	
	/** 
	 * 订单明细
	 **/
	public $order_entries;
	
	/** 
	 * orderFrom
	 **/
	public $order_from;
	
	/** 
	 * 发票信息
	 **/
	public $order_invoice_model;
	
	/** 
	 * 备注列表
	 **/
	public $order_memo_list;
	
	/** 
	 * orderPaymentSign
	 **/
	public $order_payment_sign;
	
	/** 
	 * orderPromotionsFee
	 **/
	public $order_promotions_fee;
	
	/** 
	 * orderSign
	 **/
	public $order_sign;
	
	/** 
	 * overSold
	 **/
	public $over_sold;
	
	/** 
	 * payOnline
	 **/
	public $pay_online;
	
	/** 
	 * 支付状态。1:等待买家付款，2:已付款，4:交易关闭，6:交易成功，8:交易被系统关闭
	 **/
	public $pay_status;
	
	/** 
	 * productName
	 **/
	public $product_name;
	
	/** 
	 * promotionsFee
	 **/
	public $promotions_fee;
	
	/** 
	 * 退款金额，单位分
	 **/
	public $refund_payment;
	
	/** 
	 * 退款状态。WAIT_SELLER_AGREE等待卖家同意退款协议，REFUND_SUCCESS退款成功，REFUND_CLOSED退款关闭，WAIT_BUYER_MODIFY等待买家修改，WAIT_BUYER_SEND等待买家退货，WAIT_SELLER_RECEIVE等待卖家确认收货
	 **/
	public $refund_status;
	
	/** 
	 * sLSJOrder
	 **/
	public $s_l_s_j_order;
	
	/** 
	 * 卖家支付宝id
	 **/
	public $seller_alipay_id;
	
	/** 
	 * 卖家公司名称
	 **/
	public $seller_company_name;
	
	/** 
	 * 卖家email
	 **/
	public $seller_email;
	
	/** 
	 * sellerFlag
	 **/
	public $seller_flag;
	
	/** 
	 * 卖家登录id
	 **/
	public $seller_login_id;
	
	/** 
	 * 卖家id
	 **/
	public $seller_member_id;
	
	/** 
	 * sellerName
	 **/
	public $seller_name;
	
	/** 
	 * 卖家备注
	 **/
	public $seller_order_memo;
	
	/** 
	 * sellerPhone
	 **/
	public $seller_phone;
	
	/** 
	 * 卖家评价状态。5未评价，4已评价
	 **/
	public $seller_rate_status;
	
	/** 
	 * sellerSex
	 **/
	public $seller_sex;
	
	/** 
	 * 卖家数字id
	 **/
	public $seller_user_id;
	
	/** 
	 * sheGouPayOrder
	 **/
	public $she_gou_pay_order;
	
	/** 
	 * singleStepForNewStep
	 **/
	public $single_step_for_new_step;
	
	/** 
	 * sourceType
	 **/
	public $source_type;
	
	/** 
	 * sourceTypeStr
	 **/
	public $source_type_str;
	
	/** 
	 * statTags
	 **/
	public $stat_tags;
	
	/** 
	 * 订单状态。CANCEL交易关闭，SUCCESS交易成功，WAIT_BUYER_PAY等待买家付款，WAIT_SELLER_SEND等待卖家发货，WAIT_BUYER_RECEIVE等待买家确认收货，WAIT_SELLER_ACT分阶段等待卖家操作，WAIT_BUYER_CONFIRM_ACTION分阶段等待买家确认卖家操作，WAIT_SELLER_PUSH分阶段等待卖家推进，WAIT_LOGISTICS_TAKE_IN等待物流公司揽件COD，WAIT_BUYER_SIGN等待买家签收COD，SIGN_IN_SUCCESS买家已签收COD，SIGN_IN_FAILED签收失败COD
	 **/
	public $status;
	
	/** 
	 * statusStr
	 **/
	public $status_str;
	
	/** 
	 * 分阶段协议地址
	 **/
	public $step_agreement_path;
	
	/** 
	 * 子支付单
	 **/
	public $step_order_list;
	
	/** 
	 * 是否一次性付款
	 **/
	public $step_pay_all;
	
	/** 
	 * succSumPayment
	 **/
	public $succ_sum_payment;
	
	/** 
	 * sumConfirmPaidPayment
	 **/
	public $sum_confirm_paid_payment;
	
	/** 
	 * 付款总金额，单位（分）订单需要支付的总金额=产品总金额+运费-折扣金额-抵价券（如果有的话），如果是COD订单，不包括COD服务费
	 **/
	public $sum_payment;
	
	/** 
	 * 总货品金额
	 **/
	public $sum_product_payment;
	
	/** 
	 * sumProductPaymentWithCoupon
	 **/
	public $sum_product_payment_with_coupon;
	
	/** 
	 * supportDae
	 **/
	public $support_dae;
	
	/** 
	 * tbId
	 **/
	public $tb_id;
	
	/** 
	 * 收货人地址
	 **/
	public $to_area;
	
	/** 
	 * toFullName
	 **/
	public $to_full_name;
	
	/** 
	 * 收货人邮编
	 **/
	public $to_post;
	
	/** 
	 * tocManagedTimeout
	 **/
	public $toc_managed_timeout;
	
	/** 
	 * tocSign
	 **/
	public $toc_sign;
	
	/** 
	 * 交易类型。UNIFY统一交易流程，STEPPAY分阶段交易，COD货到付款交易，CERTIFICATE信用凭证支付交易（注：该字段已不再维护，替换为tradeTypeStr，请新业务使用新字段）
	 **/
	public $trade_type;
	
	/** 
	 * 交易类型string。6统一交易流程，7分阶段交易，8货到付款交易，9信用凭证支付交易，10帐期支付交易
	 **/
	public $trade_type_str;
	
	/** 
	 * trustDeceit
	 **/
	public $trust_deceit;
	
	/** 
	 * virtual
	 **/
	public $virtual;
	
	/** 
	 * wirelessOrder
	 **/
	public $wireless_order;	
}
?>