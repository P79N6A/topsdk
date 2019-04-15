<?php

/**
 * 关联的卖家列表
 * @author auto create
 */
class SimpleAccountInfo
{
	
	/** 
	 * 关联的卖家的公司名
	 **/
	public $company_name;
	
	/** 
	 * createDate
	 **/
	public $create_date;
	
	/** 
	 * memberId
	 **/
	public $member_id;
	
	/** 
	 * 关联的卖家的关联关系描述，比如是有买卖关系，是有关注关系等，该返回值可能会空，由API发布者决定需要暴露哪些详情
	 **/
	public $relation_descs;
	
	/** 
	 * tpYear
	 **/
	public $tp_year;
	
	/** 
	 * trustScore
	 **/
	public $trust_score;
	
	/** 
	 * 关联的卖家的账号ID
	 **/
	public $user_id;	
}
?>