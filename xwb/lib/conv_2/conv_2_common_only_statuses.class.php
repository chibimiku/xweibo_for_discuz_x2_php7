<?php
/**
 * （通用）仅返回statuses里面的内容
 * @author yaoying
 * @version $Id: conv_2_common_only_statuses.class.php 1011 2012-09-21 10:34:29Z yaoying $
 *
 */
if (!defined('IS_IN_XWB_PLUGIN')) {
	exit('ACCESS DENIED');
}
class conv_2_common_only_statuses extends conv_2_base{
	
	function convert($data){
		return $data['statuses'];
	}
	
}