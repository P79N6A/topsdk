<?php
include_once 'ListMetaData.php';

/**
 * @author taobao 2011-4-22 下午02:48:56
 */
class LogicOrMetaData extends ListMetaData {
	
	public function LogicOrMetaData($elements){
		$this->ListMetaData($elements);
	}
	
	public function logicOr($metaData){
		$this->addElement($metaData);
		return $this;
	}
}

?>