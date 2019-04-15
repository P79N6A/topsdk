<?php
/**
 * TOP API: taobao.qianniu.taskmetas.count request
 * 
 * @author auto create
 * @since 1.0, 2016.03.01
 */
class QianniuTaskmetasCountRequest
{
	/** 
	 * 业务类型
	 **/
	private $bizType;
	
	/** 
	 * 关键词搜索。只对任务内容进行模糊匹配
	 **/
	private $keyWord;
	
	/** 
	 * 发起任务人的uid
	 **/
	private $senderUid;
	
	/** 
	 * 0未完成，2完成，4取消。不填为所有
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setKeyWord($keyWord)
	{
		$this->keyWord = $keyWord;
		$this->apiParas["key_word"] = $keyWord;
	}

	public function getKeyWord()
	{
		return $this->keyWord;
	}

	public function setSenderUid($senderUid)
	{
		$this->senderUid = $senderUid;
		$this->apiParas["sender_uid"] = $senderUid;
	}

	public function getSenderUid()
	{
		return $this->senderUid;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.taskmetas.count";
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
