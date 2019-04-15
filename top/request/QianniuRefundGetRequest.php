<?php
/**
 * TOP API: taobao.qianniu.refund.get request
 * 
 * @author auto create
 * @since 1.0, 2015.06.24
 */
class QianniuRefundGetRequest
{
	/** 
	 * 退款id
	 **/
	private $refundId;
	
	private $apiParas = array();
	
	public function setRefundId($refundId)
	{
		$this->refundId = $refundId;
		$this->apiParas["refund_id"] = $refundId;
	}

	public function getRefundId()
	{
		return $this->refundId;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.refund.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
