<?php

/**
 * result
 * @author auto create
 */
class PageResult
{
	
	/** 
	 * 返回值列表
	 **/
	public $datas;
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_info;
	
	/** 
	 * 分页参数，当前页
	 **/
	public $page_no;
	
	/** 
	 * 分页参数，每页多少条
	 **/
	public $page_size;
	
	/** 
	 * 是否成功
	 **/
	public $success;
	
	/** 
	 * 总条数
	 **/
	public $total;
	
	/** 
	 * 总页数
	 **/
	public $total_page;	
}
?>