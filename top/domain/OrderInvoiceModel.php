<?php

/**
 * 发票信息
 * @author auto create
 */
class OrderInvoiceModel
{
	
	/** 
	 * 公司开户行和帐号
	 **/
	public $bank_and_account;
	
	/** 
	 * 主键id
	 **/
	public $id;
	
	/** 
	 * 发票公司名称
	 **/
	public $invoice_company_name;
	
	/** 
	 * 订单号
	 **/
	public $order_id;
	
	/** 
	 * 纳税人识别号
	 **/
	public $taxpayer_identify;	
}
?>