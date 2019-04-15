<?php
/**
 * TOP API: alibaba.open.rights.updateallrights request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenRightsUpdateallrightsRequest
{
	/** 
	 * 全设置模型
	 **/
	private $rightDetail;
	
	/** 
	 * 权益设置类型
	 **/
	private $rightType;
	
	private $apiParas = array();
	
	public function setRightDetail($rightDetail)
	{
		$this->rightDetail = $rightDetail;
		$this->apiParas["right_detail"] = $rightDetail;
	}

	public function getRightDetail()
	{
		return $this->rightDetail;
	}

	public function setRightType($rightType)
	{
		$this->rightType = $rightType;
		$this->apiParas["right_type"] = $rightType;
	}

	public function getRightType()
	{
		return $this->rightType;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.rights.updateallrights";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->rightDetail,"rightDetail");
		RequestCheckUtil::checkNotNull($this->rightType,"rightType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
