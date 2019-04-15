<?php
/**
 * TOP API: alibaba.open.search.daixiao.relation.supply request
 * 
 * @author auto create
 * @since 1.0, 2017.04.25
 */
class AlibabaOpenSearchDaixiaoRelationSupplyRequest
{
	/** 
	 * 入参参数设置
	 **/
	private $paramRelationAccountParam;
	
	private $apiParas = array();
	
	public function setParamRelationAccountParam($paramRelationAccountParam)
	{
		$this->paramRelationAccountParam = $paramRelationAccountParam;
		$this->apiParas["param_relation_account_param"] = $paramRelationAccountParam;
	}

	public function getParamRelationAccountParam()
	{
		return $this->paramRelationAccountParam;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.search.daixiao.relation.supply";
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
