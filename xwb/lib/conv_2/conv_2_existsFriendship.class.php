<?php
/**
 * 将getFriendship转换为existsFriendship
 * @author yaoying
 * @version $Id: conv_2_existsFriendship.class.php 1011 2012-09-21 10:34:29Z yaoying $
 *
 */
if (!defined('IS_IN_XWB_PLUGIN')) {
	exit('ACCESS DENIED');
}
class conv_2_existsFriendship extends conv_2_base{
	
	/**
	 * 
	 * @param array $data
	 * @return array
	 */
	function convert($data){
		$result = array('friends'=>false);
		if(isset($data['source']['following'])){
			$result['friends'] = $data['source']['following'];
		}
		return $result;
	}
	
}