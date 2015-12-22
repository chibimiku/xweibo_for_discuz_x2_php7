<?php
/**
 * OAUTH2_ENABLE_UNREAD为0时，采取的默认数据
 * @see http://open.weibo.com/wiki/Statuses/unread
 * @see http://open.weibo.com/wiki/2/remind/unread_count
 * @author yaoying
 * @version $Id: conv_2_getUnread_def.class.php 1012 2012-09-21 11:20:15Z yaoying $
 *
 */
if (!defined('IS_IN_XWB_PLUGIN')) {
	exit('ACCESS DENIED');
}
class conv_2_getUnread_def extends conv_2_base{
	
	function convert(){
		//旧版数据
		return array(
			'comments' => 0,    //新的评论数
			'followers' => 0,    //新的粉丝数
			'new_status' => 0,    //新的微博
			'dm' => 0,    //私信
			'mentions' => 0,    //提到我的数
		);
	}
	
}