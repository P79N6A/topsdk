<?php
/**
 * TOP API: cainiao.moduan.commonsend.notifywithhold request
 * 
 * @author auto create
 * @since 1.0, 2017.05.08
 */
class CainiaoModuanCommonsendNotifywithholdRequest
{
	/** 
	 * 代扣请求
	 **/
	private $tdOrderWithholdReq;
	
	private $apiParas = array();
	
	public function setTdOrderWithholdReq($tdOrderWithholdReq)
	{
		$this->tdOrderWithholdReq = $tdOrderWithholdReq;
		$this->apiParas["td_order_withhold_req"] = $tdOrderWithholdReq;
	}

	public function getTdOrderWithholdReq()
	{
		return $this->tdOrderWithholdReq;
	}

	public function getApiMethodName()
	{
		return "cainiao.moduan.commonsend.notifywithhold";
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
