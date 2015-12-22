<?php
/**
 * @see http://open.weibo.com/wiki/Statuses/unread
 * @see http://open.weibo.com/wiki/2/remind/unread_count
 * @author yaoying
 * @version $Id: conv_2_getUnread.class.php 1011 2012-09-21 10:34:29Z yaoying $
 *
 */
if (!defined('IS_IN_XWB_PLUGIN')) {
	exit('ACCESS DENIED');
}
class conv_2_getUnread extends conv_2_base{
	
	function convert($data){
		//旧版数据
		$new = array(
			'comments' => 0,    //新的评论数
			'followers' => 0,    //新的粉丝数
			'new_status' => 0,    //新的微博
			'dm' => 0,    //私信
			'mentions' => 0,    //提到我的数
		);
		

		$new['comments'] = $data['cmt'];		
		$new['followers'] = $data['follower'];
		$new['new_status'] = $data['status'];
		$new['dm'] = $data['dm'];
		$new['mentions'] = $data['mention_status'];   //OAuth仅使用“新提及我的微博数”
		
		$data = array_merge($data, $new);
		if(!OAUTH2_ENABLE_UNREAD){
			foreach($data as $k => $row){
				$data[$k] = 0;
			}
		}
		
		return $data;
	}
	
}