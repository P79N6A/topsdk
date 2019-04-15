<?php

/**
 * 1
 * @author auto create
 */
class ResultObject
{
	
	/** 
	 * 联系信息-所在地信息
	 **/
	public $address_location;
	
	/** 
	 * 会员认证状态。1、如果该会员没有经过认证返回"认证信息：未经过第三方专业机构认证" 2、如果该会员经过了个人身份信息的实名认证返回"个人身份信息：已通过实名认证" 3、如果该会员经过了工商注册信息经过了第三方认证机构的认证，则返回"工商注册信息：已通过{第三方认证机构名称}认证"
	 **/
	public $certificate_status;
	
	/** 
	 * 公司库地址
	 **/
	public $company_address;
	
	/** 
	 * 公司信息-公司名称
	 **/
	public $company_name;
	
	/** 
	 * 注册时间
	 **/
	public $create_time;
	
	/** 
	 * 联系信息-部门
	 **/
	public $department;
	
	/** 
	 * 旺铺地址 	会员企业网站的顶级域名
	 **/
	public $domain_address;
	
	/** 
	 * 联系信息-电子邮箱
	 **/
	public $email;
	
	/** 
	 * 联系信息-传真
	 **/
	public $fax;
	
	/** 
	 * 会员是否具有开通分销平台资格。true：具有分销平台资格；false：没有分销平台资格
	 **/
	public $have_distribution;
	
	/** 
	 * 是否具有预存款的权限。true：具有预存款权限；false：没有预存款权限
	 **/
	public $have_precharge;
	
	/** 
	 * 是否开通了网站。true：已开通；false：未开通
	 **/
	public $have_site;
	
	/** 
	 * 公司信息-网页地址
	 **/
	public $homepage_url;
	
	/** 
	 * 公司信息-主营行业
	 **/
	public $industry;
	
	/** 
	 * 是否绑定支付宝账户。true：已经绑定了支付宝；false：没有绑定支付宝
	 **/
	public $is_alipay_bind;
	
	/** 
	 * 是否参加诚信保障。true：参加诚信保障；false：没有参加诚信保障
	 **/
	public $is_credit_protection;
	
	/** 
	 * 会员是否已经开通分销平台。true：已开通；false：未开通
	 **/
	public $is_distribution;
	
	/** 
	 * 是否ETC会员。true：ETC海外诚信通会员；false：非ETC海外诚信通会员
	 **/
	public $is_e_t_c_t_p;
	
	/** 
	 * 是否绑定了Email登录。true：是；false：否
	 **/
	public $is_email_bind;
	
	/** 
	 * 是否进行邮箱验证，true ，false
	 **/
	public $is_email_verify;
	
	/** 
	 * 是否企业诚信通。true：企业诚信通会员；false：非企业诚信通会员
	 **/
	public $is_enterprise_t_p;
	
	/** 
	 * 是否专业市场诚信通会员。true：专业市场诚信通会员；false：非专业市场诚信通会员
	 **/
	public $is_market_t_p;
	
	/** 
	 * 是否绑定了手机登录。true：是；false：否
	 **/
	public $is_mobile_bind;
	
	/** 
	 * 是否手机验证。true：是；false：否
	 **/
	public $is_mobile_verify;
	
	/** 
	 * 是否个人诚信通。true：个人诚信通会员；false：非个人诚信通会员
	 **/
	public $is_personal_t_p;
	
	/** 
	 * 是否已经开通预存款服务。true：已开通；false：未开通
	 **/
	public $is_precharge;
	
	/** 
	 * 是否已发布公司库。true：已发布；false：未发布
	 **/
	public $is_published_company;
	
	/** 
	 * 会员账户类型。true：诚信通会员；false：免费账户会员
	 **/
	public $is_t_p;
	
	/** 
	 * 最近登录时间
	 **/
	public $last_login;
	
	/** 
	 * loginId
	 **/
	public $login_id;
	
	/** 
	 * 会员ID
	 **/
	public $member_id;
	
	/** 
	 * 联系信息-手机
	 **/
	public $mobile_phone;
	
	/** 
	 * 联系信息-职位
	 **/
	public $open_job_title;
	
	/** 
	 * 会员档案地址
	 **/
	public $personal_file_address;
	
	/** 
	 * 公司信息-主营产品
	 **/
	public $product;
	
	/** 
	 * 联系信息-姓名
	 **/
	public $seller_name;
	
	/** 
	 * 联系信息-性别
	 **/
	public $sex;
	
	/** 
	 * 会员状态。Enabled：有效; Disabled：无效
	 **/
	public $status;
	
	/** 
	 * 联系信息-司电话
	 **/
	public $telephone;
	
	/** 
	 * 诚信档案地址。只有TP会员才有效
	 **/
	public $trust_product_address;
	
	/** 
	 * 诚信通指数。只有TP会员才有效
	 **/
	public $trust_score;
	
	/** 
	 * 状态，Y N
	 **/
	public $verify_status;
	
	/** 
	 * 商铺地址 	企业网站阿里巴巴二级域名
	 **/
	public $winport_address;	
}
?>