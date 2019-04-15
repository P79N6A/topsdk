<?php

/**
 * 查询参数
 * @author auto create
 */
class IsvDaixiaoRecomRequest
{
	
	/** 
	 * 供应商memberId
	 **/
	public $company_member_id;
	
	/** 
	 * 分页参数的当前页
	 **/
	public $current_page;
	
	/** 
	 * 分页中每页大小，当前后台默认固定10，此参数暂时可忽略不填，后续根据业务需要 调整为可变参数
	 **/
	public $page_size;
	
	/** 
	 * 淘宝用户Id，此参数需要授权，系统会自动读取
	 **/
	public $user_id;	
}
?>