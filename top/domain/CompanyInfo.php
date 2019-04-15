<?php

/**
 * 根据自定义返回字段返回公司库信息以及相应的字段访问权限返回。只有会员本人在登录状态下且传入sessionid参数时，才返回会员隐私数据。
 * @author auto create
 */
class CompanyInfo
{
	
	/** 
	 * 公司详细信息-帐号
	 **/
	public $account;
	
	/** 
	 * 公司详细信息-年出口额
	 **/
	public $annual_export_amount;
	
	/** 
	 * 公司详细信息-年进口额
	 **/
	public $annual_import_amount;
	
	/** 
	 * 公司详细信息-年营业额
	 **/
	public $annual_revenue;
	
	/** 
	 * 公司详细信息-开户银行
	 **/
	public $bank;
	
	/** 
	 * 公司基本信息-经营模式
	 **/
	public $biz_model;
	
	/** 
	 * 公司基本信息-主要经营地点
	 **/
	public $biz_place;
	
	/** 
	 * 公司详细信息-品牌名称
	 **/
	public $brand_name;
	
	/** 
	 * 公司详细信息-管理体系认证
	 **/
	public $certification;
	
	/** 
	 * 公司基本信息-主营行业
	 **/
	public $company_category_info;
	
	/** 
	 * 公司库ID
	 **/
	public $company_id;
	
	/** 
	 * 公司基本信息（对于匿名访客和非本人登录会员：只有公司库状态处于发布状态才能返回，下同）-公司名称
	 **/
	public $company_name;
	
	/** 
	 * 公司基本信息-公司英文名
	 **/
	public $company_name_en;
	
	/** 
	 * 公司库状态。Auditing：等待审核；FailAudited：审核未通过；Published：已发布
	 **/
	public $company_status;
	
	/** 
	 * 公司详细信息-员工人数
	 **/
	public $employees_count;
	
	/** 
	 * 公司详细信息-公司成立时间
	 **/
	public $established_year;
	
	/** 
	 * 公司详细信息-厂房面积
	 **/
	public $factory_size;
	
	/** 
	 * 公司详细信息-公司注册地
	 **/
	public $founded_place;
	
	/** 
	 * 公司基本信息-公司网址
	 **/
	public $homepage_url;
	
	/** 
	 * 公司详细信息-主要客户群
	 **/
	public $key_clients;
	
	/** 
	 * 公司基本信息-企业类型
	 **/
	public $legal_status;
	
	/** 
	 * 会员ID
	 **/
	public $member_id;
	
	/** 
	 * 公司详细信息-是否提供OEM代加工
	 **/
	public $oem_odm;
	
	/** 
	 * 公司详细信息-法定代表人/负责人
	 **/
	public $principal;
	
	/** 
	 * 公司详细信息-月产量
	 **/
	public $production_capacity;
	
	/** 
	 * 公司基本信息-主营产品
	 **/
	public $production_service;
	
	/** 
	 * 公司基本信息-公司简介
	 **/
	public $profile;
	
	/** 
	 * 公司详细信息-质量控制
	 **/
	public $qa_qc;
	
	/** 
	 * 公司详细信息（对于匿名访客和非本人登录会员：只有公司库状态处于发布状态才能返回，下同）-注册资本
	 **/
	public $reg_capital;
	
	/** 
	 * 公司详细信息-研发部门人数
	 **/
	public $rnd_staff_num;
	
	/** 
	 * 公司详细信息-主要市场
	 **/
	public $trade_region_info;	
}
?>