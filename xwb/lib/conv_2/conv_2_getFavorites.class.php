<?php
/**
 * @see http://open.weibo.com/wiki/2/favorites
 * @see http://open.weibo.com/wiki/Favorites
 * @author yaoying
 * @version $Id: conv_2_getFavorites.class.php 1011 2012-09-21 10:34:29Z yaoying $
 *
 */
if (!defined('IS_IN_XWB_PLUGIN')) {
	exit('ACCESS DENIED');
}
class conv_2_getFavorites extends conv_2_base{
	
	function convert($data){
		$new = array();
		foreach($data['favorites'] as $row){
			$new[] = $row['status'];
		}
		return $new;
	}
	
}