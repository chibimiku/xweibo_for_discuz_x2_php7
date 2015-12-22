<?php
/**
 * 搜索微博文章
 * @author yaoying
 * @version $Id: conv_2_searchStatuse.class.php 1011 2012-09-21 10:34:29Z yaoying $
 *
 */
if (!defined('IS_IN_XWB_PLUGIN')) {
	exit('ACCESS DENIED');
}
class conv_2_searchStatuse extends conv_2_base{
	
	/**
	 * 
	 * @param array $data
	 * @param array $param 参数，必填key有：
	 * [string] body 要提取的body
	 * @return array
	 */
	function convert($data, $param){
		if(isset($param['needcount']) && $param['needcount']){
			return array(
				'results'=>isset($data['statuses']) ? $data['statuses'] : array(), 
				'total_count_maybe'=>isset($data['total_number']) ? $data['total_number'] : 0, 
			);
		}else{
			return isset($data['statuses']) ? $data['statuses'] : array();
		}
	}
	
}