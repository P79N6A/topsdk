<?php

/**
 * 卖家统计信息的返回结果
 * @author auto create
 */
class StatDetail
{
	
	/** 
	 * 优化的商品记录数量
	 **/
	public $itemAdvise;
	
	/** 
	 * 处罚的商品记录数量
	 **/
	public $itemPunish;
	
	/** 
	 * 提醒的商品记录数量
	 **/
	public $itemWarn;
	
	/** 
	 * 已经处罚被扣除的分数*100取整。包括店铺和商品
	 **/
	public $punishScore;
	
	/** 
	 * 处罚的店铺记录数量
	 **/
	public $shopPunish;
	
	/** 
	 * 提醒的店铺记录数量
	 **/
	public $shopWarn;
	
	/** 
	 * 提醒不处理将被扣除的分数*100取整。包括店铺和商品
	 **/
	public $warnScore;	
}
?>