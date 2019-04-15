<?php
/**
 * TOP API: taobao.rdc.easygo.feedbacksubmit request
 * 
 * @author auto create
 * @since 1.0, 2015.09.15
 */
class RdcEasygoFeedbacksubmitRequest
{
	/** 
	 * 商家对于想提供的服务项的反馈
	 **/
	private $feedback;
	
	private $apiParas = array();
	
	public function setFeedback($feedback)
	{
		$this->feedback = $feedback;
		$this->apiParas["feedback"] = $feedback;
	}

	public function getFeedback()
	{
		return $this->feedback;
	}

	public function getApiMethodName()
	{
		return "taobao.rdc.easygo.feedbacksubmit";
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
