<?php
/**
 * 表情代码转换
 * @author yaoying
 * @version $Id: conv_2_emotions.class.php 1011 2012-09-21 10:34:29Z yaoying $
 */
if (!defined('IS_IN_XWB_PLUGIN')) {
	exit('ACCESS DENIED');
}
class conv_2_emotions extends conv_2_base{
	
	/**
	 * @param array $data
	 * @return array
	 */
	function convert($data){
		foreach($data as $k => $v){
			$data[$k]['is_hot'] = $v['hot'];
			$data[$k]['is_common'] = $v['common'];
			$data[$k]['order_number'] = intval($k);
		}
		return $data;
	}
	
}
