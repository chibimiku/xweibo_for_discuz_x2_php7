<?php
/**
 * 搜索微博文章
 * @author yaoying
 * @version $Id: conv_2_getSuggestionsAtUsers.class.php 1011 2012-09-21 10:34:29Z yaoying $
 *
 */
if (!defined('IS_IN_XWB_PLUGIN')) {
	exit('ACCESS DENIED');
}
class conv_2_getSuggestionsAtUsers extends conv_2_base{
	
	/**
	 * 
	 * @param array $data
	 * @return array
	 */
	function convert($data){
		foreach($data as $k => $row){
			if(!isset($row['remark'])){
				$data[$k]['remark'] = '';
			}
			$data[$k]['nickname'] = $row['screen_name'];
		}
		return $data;
	}
	
}