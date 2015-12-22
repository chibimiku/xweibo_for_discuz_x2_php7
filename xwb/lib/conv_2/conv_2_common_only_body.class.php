<?php
/**
 * （通用）仅返回指定body里面的内容
 * @author yaoying
 * @version $Id: conv_2_common_only_body.class.php 1011 2012-09-21 10:34:29Z yaoying $
 *
 */
if (!defined('IS_IN_XWB_PLUGIN')) {
	exit('ACCESS DENIED');
}
class conv_2_common_only_body extends conv_2_base{
	
	/**
	 * 
	 * @param array $data
	 * @param array $param 参数，必填key有：
	 * [string] body 要提取的body
	 * @return array
	 */
	function convert($data, $param){
		if(!isset($param['body']) || !isset($data[$param['body']])){
			return array();
		}else{
			return $data[$param['body']];
		}
	}
	
}