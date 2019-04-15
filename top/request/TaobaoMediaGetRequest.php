<?php
/**
 * TOP API: Taobao.media.get request
 * 
 * @author auto create
 * @since 1.0, 2010-06-07 00:00:00
 */
class TaobaoMediaGetRequest
{
	/** 
	 * 查询添加结束时间点，格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $endCreated;
	
	/** 
	 * 查询文件修改结束时间，格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $endModified;
	
	/** 
	 * 需要返回的字段,根据MediaFile中的以下字段：file_id,media_category_id,file_url,file_name,type,file_scale,status,deleted,video_type,file_modified,created,modified,多个用“,”分隔，如：status,deleted,video_type
	 **/
	private $fields;
	
	/** 
	 * 文件ID
	 **/
	private $fileId;
	
	/** 
	 * 文件标题,最大长度50字符，中英文都算一字符
	 **/
	private $fileName;
	
	/** 
	 * 文件分类ID
	 **/
	private $mediaCategoryId;
	
	/** 
	 * 文件查询结果排序,created:desc按添加时间从晚到早(默认),created:asc按添加时间从早到,modified:desc按视频文件编辑时间从晚到早,modified:asc按视频文件编辑时间从早到晚,最后两者flash查询不可用。
	 **/
	private $orderBy;
	
	/** 
	 * 页码.传入值为1代表第一页,传入值为2代表第二页,依此类推,默认值为1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数.每页返回最多返回100条,默认值40
	 **/
	private $pageSize;
	
	/** 
	 * 查询添加开始时间点，格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $startCreated;
	
	/** 
	 * 查询文件修改开始时间，格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $startModified;
	
	/** 
	 * normal_video：普通视频，img_video：相册视频（仅对视频isv有效）
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setEndCreated($endCreated)
	{
		$this->endCreated = $endCreated;
		$this->apiParas["end_created"] = $endCreated;
	}

	public function getEndCreated()
	{
		return $this->endCreated;
	}

	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		$this->apiParas["file_name"] = $fileName;
	}

	public function getFileName()
	{
		return $this->fileName;
	}

	public function setMediaCategoryId($mediaCategoryId)
	{
		$this->mediaCategoryId = $mediaCategoryId;
		$this->apiParas["media_category_id"] = $mediaCategoryId;
	}

	public function getMediaCategoryId()
	{
		return $this->mediaCategoryId;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartCreated($startCreated)
	{
		$this->startCreated = $startCreated;
		$this->apiParas["start_created"] = $startCreated;
	}

	public function getStartCreated()
	{
		return $this->startCreated;
	}

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "Taobao.media.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
