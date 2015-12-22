<?php
/**
 * @see http://open.weibo.com/wiki/Account/get_privacy
 * @see http://open.weibo.com/wiki/2/account/get_privacy
 * @author yaoying
 * @version $Id: conv_2_getPrivacy.class.php 1011 2012-09-21 10:34:29Z yaoying $
 *
 */
if (!defined('IS_IN_XWB_PLUGIN')) {
	exit('ACCESS DENIED');
}
class conv_2_getPrivacy extends conv_2_base{
	
	function convert($data){
		$data['dm'] = $data['message'];
		$data['real_name'] = $data['realname'];
		return $data;
	}
	
}