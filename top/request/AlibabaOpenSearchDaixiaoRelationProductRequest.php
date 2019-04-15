<?php
/**
 * TOP API: alibaba.open.search.daixiao.relation.product request
 * 
 * @author auto create
 * @since 1.0, 2017.04.25
 */
class AlibabaOpenSearchDaixiaoRelationProductRequest
{
	/** 
	 * 查询的入参
	 **/
	private $paramRelationProductParam;
	
	private $apiParas = array();
	
	public function setParamRelationProductParam($paramRelationProductParam)
	{
		$this->paramRelationProductParam = $paramRelationProductParam;
		$this->apiParas["param_relation_product_param"] = $paramRelationProductParam;
	}

	public function getParamRelationProductParam()
	{
		return $this->paramRelationProductParam;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.search.daixiao.relation.product";
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
