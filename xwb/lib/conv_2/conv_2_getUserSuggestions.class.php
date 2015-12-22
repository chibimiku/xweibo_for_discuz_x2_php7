<?php
/**
 * 获取当前用户感兴趣的用户列表转换
 * 请注意，OAuth 1.0和2.0相差甚大！此转换需要额外多调用OAuth接口1次！存在资源次数消耗！
 * 
 * oauth 2.0中，reason的数组key有如下可能：
 * 		tag	string	根据标签推荐，按内容推荐（格式1）
 * 		comp	string	根据公司推荐，按内容推荐（格式1）
 * 		scho	string	根据学校推荐，按内容推荐（格式1）
 * 		f	string	按粉丝关系推荐，按关系推荐（格式2）
 * 		h	string	按关注关系推荐，按关系推荐（格式2）
 * 
 * @author yaoying
 * @version $Id: conv_2_getUserSuggestions.class.php 1011 2012-09-21 10:34:29Z yaoying $
 *
 */
if (!defined('IS_IN_XWB_PLUGIN')) {
	exit('ACCESS DENIED');
}
class conv_2_getUserSuggestions extends conv_2_base{
	
	/**
	 * 
	 * @param array $data
	 * @param array $param 参数，必填key有：
	 * [string] with_reason OAuth 1.0参数
	 * [Object] weibo weibo实例，用于后续调用
	 * @return array
	 */	
	function convert($data, $param){
		$uids = $reason = array();
		foreach($data as $row){
			$_uid = strval($row['uid']);
			$uids[$_uid]  = $_uid;
			if(!empty($row['reason'])){
				$reason[$_uid] = key($row['reason']);
			}
		}
		
		$users = array();
		if(empty($uids)){
			return $users;
		}
		$users = $param['weibo']->getUsersBatchShow(implode(',', $uids));
		$users = $users['rst'];
		if(empty($users) || !$param['with_reason']){
			return $users;
		}
		
		$new_data = array();
		foreach($users as $user){
			$_uid = isset($user['idstr']) ? $user['idstr'] : strval($user['id']);
			$_reason = $reason[$_uid];
			$new_data[] = array(
				'reason' => $_reason,
				'user' => $user,
			);
		}
		return $new_data;
		
	}
	
}