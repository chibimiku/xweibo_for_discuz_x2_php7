<?php
/**
 * notice相关设置已经不存在，故采用虚值
 * @author yaoying
 * @version $Id: conv_2_defNoticeVal.class.php 1011 2012-09-21 10:34:29Z yaoying $
 */
if (!defined('IS_IN_XWB_PLUGIN')) {
	exit('ACCESS DENIED');
}
class conv_2_defNoticeVal extends conv_2_base{
	
	/**
	 * @param array $data
	 * @return array
	 */
	function convert(){
		$new =	array(
				'comment' => 1,  //int|string 新评论提醒，0—不提醒，1—提醒，默认值1,
				'follower' => 1,       //新粉丝提醒，0—不提醒，1—提醒，默认值1,
				'dm' => 0,    //新私信提醒，0—不提醒，1—提醒。xweibo没有新浪微博私信，故设置为0
				'mention' => 1,    //@提到我提醒，0—不提醒，1—提醒，默认值1,
				'from_user' => 0,   //设置哪些提到我的微博计入提醒数，微博作者身份，0--所有人，1—关注的人,
				'status_type' => 0,   //设置哪些提到我的微博计入提醒数，微博类型，0—所有微博，1—原创的微博)
		);
		return $new;
	}
	
	
}