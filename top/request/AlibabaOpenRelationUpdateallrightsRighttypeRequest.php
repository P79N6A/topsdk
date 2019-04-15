<?php
/**
 * TOP API: alibaba.open.relation.updateallrights.righttype request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenRelationUpdateallrightsRighttypeRequest
{
	/** 
	 * 优惠类型
	 **/
	private $rightType;
	
	private $apiParas = array();
	
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
		return "alibaba.open.relation.updateallrights.righttype";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->rightType,"rightType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
