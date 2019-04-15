<?php
/**
 * TOP API: taobao.ecloud.top.file.getofficeviewurl request
 * 
 * @author auto create
 * @since 1.0, 2015.03.13
 */
class EcloudTopFileGetofficeviewurlRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $clientId;
	
	/** 
	 * 系统自动生成
	 **/
	private $fileId;
	
	/** 
	 * 系统自动生成
	 **/
	private $site;
	
	/** 
	 * 系统自动生成
	 **/
	private $spaceId;
	
	private $apiParas = array();
	
	public function setClientId($clientId)
	{
		$this->clientId = $clientId;
		$this->apiParas["client_id"] = $clientId;
	}

	public function getClientId()
	{
		return $this->clientId;
	}

	public function setFileId($fileId)
	{
		$this->fileId = $fileId;
		$this->apiParas["file_id"] = $fileId;
	}

	public function getFileId()
	{
		return $this->fileId;
	}

	public function setSite($site)
	{
		$this->site = $site;
		$this->apiParas["site"] = $site;
	}

	public function getSite()
	{
		return $this->site;
	}

	public function setSpaceId($spaceId)
	{
		$this->spaceId = $spaceId;
		$this->apiParas["space_id"] = $spaceId;
	}

	public function getSpaceId()
	{
		return $this->spaceId;
	}

	public function getApiMethodName()
	{
		return "taobao.ecloud.top.file.getofficeviewurl";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->clientId,"clientId");
		RequestCheckUtil::checkNotNull($this->fileId,"fileId");
		RequestCheckUtil::checkNotNull($this->spaceId,"spaceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
