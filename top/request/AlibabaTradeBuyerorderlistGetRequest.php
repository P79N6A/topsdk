<?php
/**
 * TOP API: alibaba.trade.buyerorderlist.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaTradeBuyerorderlistGetRequest
{
	/** 
	 * 请求入参
	 **/
	private $paramTradeGetOrderListParam;
	
	private $apiParas = array();
	
	public function setParamTradeGetOrderListParam($paramTradeGetOrderListParam)
	{
		$this->paramTradeGetOrderListParam = $paramTradeGetOrderListParam;
		$this->apiParas["param_trade_get_order_list_param"] = $paramTradeGetOrderListParam;
	}

	public function getParamTradeGetOrderListParam()
	{
		return $this->paramTradeGetOrderListParam;
	}

	public function getApiMethodName()
	{
		return "alibaba.trade.buyerorderlist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
