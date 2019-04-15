<?php
/**
 * TOP API: taobao.ecloud.top.sysfile.list request
 * 
 * @author auto create
 * @since 1.0, 2015.03.22
 */
class EcloudTopSysfileListRequest
{
	/** 
	 * 客户端id
	 **/
	private $clientId;
	
	/** 
	 * ALL(0),  	IMG(1),  	DOC(2),  	TXT(3),  	MUSIC(4),  	VIDEO(5),  	ZIP(6);
	 **/
	private $fileType;
	
	/** 
	 * 存储在系统空间制定目录名
	 **/
	private $keyName;
	
	/** 
	 * 每次返回记录记录数0~200
	 **/
	private $length;
	
	/** 
	 * 当前索引位置，首次请求为0
	 **/
	private $offset;
	
	/** 
	 * 用户site
	 **/
	private $site;
	
	/** 
	 * 0：按照更新时间升序 ，1：按照更新时间降序,  	2：按照文件类型升序,  3：按照文件类型降序,  	4：按照文件名升序,  5：按照文件名降序,  	6：按照文件大小升序,  7：按照文件大小降序
	 **/
	private $sortType;
	
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

	public function setFileType($fileType)
	{
		$this->fileType = $fileType;
		$this->apiParas["file_type"] = $fileType;
	}

	public function getFileType()
	{
		return $this->fileType;
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

	public function setLength($length)
	{
		$this->length = $length;
		$this->apiParas["length"] = $length;
	}

	public function getLength()
	{
		return $this->length;
	}

	public function setOffset($offset)
	{
		$this->offset = $offset;
		$this->apiParas["offset"] = $offset;
	}

	public function getOffset()
	{
		return $this->offset;
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

	public function setSortType($sortType)
	{
		$this->sortType = $sortType;
		$this->apiParas["sort_type"] = $sortType;
	}

	public function getSortType()
	{
		return $this->sortType;
	}

	public function getApiMethodName()
	{
		return "taobao.ecloud.top.sysfile.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->clientId,"clientId");
		RequestCheckUtil::checkNotNull($this->keyName,"keyName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
