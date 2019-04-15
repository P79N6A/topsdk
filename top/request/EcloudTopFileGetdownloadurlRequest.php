<?php
/**
 * TOP API: taobao.ecloud.top.file.getdownloadurl request
 * 
 * @author auto create
 * @since 1.0, 2015.03.17
 */
class EcloudTopFileGetdownloadurlRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $clientId;
	
	/** 
	 * 系统自动生成
	 **/
	private $fileIds;
	
	/** 
	 * 系统自动生成
	 **/
	private $packageName;
	
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

	public function setFileIds($fileIds)
	{
		$this->fileIds = $fileIds;
		$this->apiParas["file_ids"] = $fileIds;
	}

	public function getFileIds()
	{
		return $this->fileIds;
	}

	public function setPackageName($packageName)
	{
		$this->packageName = $packageName;
		$this->apiParas["package_name"] = $packageName;
	}

	public function getPackageName()
	{
		return $this->packageName;
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
		return "taobao.ecloud.top.file.getdownloadurl";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->clientId,"clientId");
		RequestCheckUtil::checkNotNull($this->fileIds,"fileIds");
		RequestCheckUtil::checkNotNull($this->spaceId,"spaceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
