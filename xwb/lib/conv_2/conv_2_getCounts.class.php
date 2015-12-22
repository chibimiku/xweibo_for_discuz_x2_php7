<?php
/**
 * @see http://open.weibo.com/wiki/Statuses/counts
 * @see http://open.weibo.com/wiki/2/statuses/count
 * @author yaoying
 * @version $Id: conv_2_getCounts.class.php 1011 2012-09-21 10:34:29Z yaoying $
 *
 */
if (!defined('IS_IN_XWB_PLUGIN')) {
	exit('ACCESS DENIED');
}
class conv_2_getCounts extends conv_2_base{
	
	function convert($data){
		foreach($data as $k => $row){
			if(isset($row['rt'])){
				continue;
			}elseif(!empty($row['reposts'])){
				$data[$k]['rt'] = $row['reposts'];
			}
		}
		return $data;
	}
	
}