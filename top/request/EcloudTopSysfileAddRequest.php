<?php
/**
 * TOP API: taobao.ecloud.top.sysfile.add request
 * 
 * @author auto create
 * @since 1.0, 2015.03.22
 */
class EcloudTopSysfileAddRequest
{
	/** 
	 * 客户端id
	 **/
	private $clientId;
	
	/** 
	 * 被添加文件信息，json格式 [{"fileId":1234,"spaceId":4567},{"fileId":478763,"spaceId":16002}]
	 **/
	private $fileInfos;
	
	/** 
	 * 存储在系统空间制定目录名
	 **/
	private $keyName;
	
	/** 
	 * 若已经存在同名同类型文件，TRUE:文件增量文件版本，目录资源返回当前目录；FLASE：返回同名异常
	 **/
	private $overwrite;
	
	/** 
	 * 用户site
	 **/
	private $site;
	
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

	public function setFileInfos($fileInfos)
	{
		$this->fileInfos = $fileInfos;
		$this->apiParas["file_infos"] = $fileInfos;
	}

	public function getFileInfos()
	{
		return $this->fileInfos;
	}

	public function setKeyName($keyName)
	{
		$this->keyName = $keyName;
		$this->apiParas["key_name"] = $keyName;
	}

	public function getKeyName()
	{
		return $this->keyName;
	}

	public function setOverwrite($overwrite)
	{
		$this->overwrite = $overwrite;
		$this->apiParas["overwrite"] = $overwrite;
	}

	public function getOverwrite()
	{
		return $this->overwrite;
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

	public function getApiMethodName()
	{
		return "taobao.ecloud.top.sysfile.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->clientId,"clientId");
		RequestCheckUtil::checkNotNull($this->fileInfos,"fileInfos");
		RequestCheckUtil::checkNotNull($this->keyName,"keyName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
