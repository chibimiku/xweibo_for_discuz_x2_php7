<?php
/*
 * @version $Id: gbk.php 743 2011-05-16 09:39:01Z yaoying $
 */

if(XWB_S_VERSION >= 2){
	$_pluginid = 'sina_xweibo_x2';
}else{
	$_pluginid = 'sina_xweibo';
}

$_LANG = array(
	'xwb_bind_sina_set' => '����΢��������',
	'xwb_bind_sina_set_tips' => '������΢���ʺţ���ķ�����ͬʱ����������΢����',
	'xwb_bind_sina_set_btn' => '������΢��',
	'xwb_off_bind_sina' => '�㻹δ������΢��',
	'xwb_have_bind_privilege' => '�󶨺��㽫���������Ȩ��',
	'xwb_have_bind_privilege_1' => '&middot;��ʹ������΢���ʺŵ�¼$bbname',
	'xwb_have_bind_privilege_2' => '&middot;��&nbsp;' . XWB_S_NAME . '&nbsp;��������ݿ�ͬʱ����������΢��',
	'xwb_have_bind_privilege_3' => '&middot;��&nbsp;' . XWB_S_NAME . '&nbsp;�����ʹ������΢��',
	'xwb_bind_now' => '������΢��',
	'xwb_off_mblog_account' => '��û������΢���ʺţ�',
	'xwb_30sec_register' => '30��������ע��',

	'xwb_new_is_auto2sinamblog' => '�·����Ƿ��Զ���������΢��',
	'xwb_save_setting' => '��������',
	'xwb_del_bind' => '�����',
	'xwb_have_bind_sinamblog' => '�Ѱ�����΢��',
	'xwb_off_bind_sinamblog' => 'δ������΢��',
	'xwb_sina_nick' => '�ǳ�',
	'xwb_del_bind' => '�����',
	'xwb_del_bind_txt' => '����󶨺�����&nbsp;��̳&nbsp;��������ݽ�����ͬ��������΢��',
	'xwb_process_binding' => '����������У����Ժ�.....<br />������������ʾ���ڣ�<a href="javascript:XWBcontrol.%s()">������������</a>��<br />������޷������������Ƿ��ֹ��Javascript��Ȼ��ص���ҳ���²�����',
	'xwb_have_sinamblog' => '��������΢���ʺţ���ֱ�ӵ�¼��',
	'xwb_login_by_sinamblog_account' => '��΢���ʺŵ�¼',
	'xwb_forward' => 'ת����΢��',
	'xwb_sycn_to_sina' => 'ͬʱ����������΢��',
	'xwb_sycn_open' => '��ͨ�˹��ܣ������´��ڣ�',
	'xwb_topic_has_sycn_to' => '��ͬ����',
	'xwb_topic_has_sycn_to_new' => '�����Ѿ�ͬ����',
    'xwb_topic_has_sycn_to_new_end' => '��΢��',
	'xwb_reply_from' => '����',
	'xwb_admin_settings' => '΢������',
	'xwb_sina_mblog' => '����΢��',
	'xwb_use_sina_signer'=>'ʹ������΢��ǩ��',
	'xwb_his_sina_mblog' => '%s ������΢��',
	'xwb_bind_my_sina_mblog' => '���ҵ�����΢��',

	'xwb_system_error' => 'ϵͳ�ڲ��������Ժ�����',
	'xwb_user_not_exists' => '�û�������',
	'xwb_target_weibo_not_exist' => '΢����ɾ��',
	'xwb_weibo_id_null' => '��ȡ΢��IDʧ��',
	'xwb_app_key_error' => '��ԴAPP_KEY����',
	'xwb_request_reach_api_maxium' => '�����������API���ƣ����Ժ�����',
	'xwb_comment_reach_api_maxium' => '���۴�������API���ƣ����Ժ�����',
	'xwb_update_reach_api_maxium' => '����΢����������API���ƣ����Ժ�����',
	'xwb_access_resource_api_denied' => '����API��Դ���ܾ���ԭ�򣺸���Դ��Ҫappkeyӵ�и��߼�����Ȩ',
	'xwb_access_resource_api_denied' => '����API��Դ���ܾ���ԭ�򣺸���Դ��Ҫappkeyӵ�и��߼�����Ȩ',
	'xwb_token_error' => '������Ѿ�ȡ����Ӧ��վ�����Ȩ�����Ƚ����ǰ�󶨣�Ȼ�����°󶨣��Ա��Զ����½�����Ȩ',


	'xwb_register_pwd_notice_pm_subject' => "��ӭ����ע�ᣡ",
	'xwb_register_pwd_notice_pm_msg' => "�𾴵�%s��\n�����ʺ��Ѿ��󶨵�����΢���ʺţ��´����ɵ������΢����¼��ͼƬ���е�¼��\nͬʱ��Ҳ�����ڱ�վʹ���û�����¼������Ϊ��%s\nΪ�������ʺŰ�ȫ���뾡��ɾ������Ϣ��",

	'xwb_site_user_not_exist' => '���󶨵���̳�û������ڻ��߱�����Աɾ����<br />��������΢���ʺŵ�¼������̳ע�ᣬ������ϵ��վ����Ա��',

	'xwb_blog_no_subject' => 'δ������־',
	'xwb_blog_publish_message' => '������һƪ����־��%s',

	'xwb_article_no_subject' => 'δ��������',
	'xwb_article_publish_message' => '������һƪ�����£�%s',

	'xwb_want_to_share2weibo' => '<a href="home.php?mod=spacecp&ac=plugin&id='. $_pluginid. ':home_binding">��Ҫ�ѷ���ͬ��������΢��</a>',
	'xwb_allow_share2weibo' => '�������ķ����ͬ������������΢����<a href="home.php?mod=spacecp&ac=plugin&id='. $_pluginid. ':home_binding">����ͬ����</a>',

	'xwb_want_to_doing2weibo' => '<a href="home.php?mod=spacecp&ac=plugin&id='. $_pluginid. ':home_binding">��Ҫ�Ѽ�¼ͬ��������΢��</a>',
	'xwb_allow_doing2weibo' => '�������ļ�¼��ͬ������������΢����<a href="home.php?mod=spacecp&ac=plugin&id='. $_pluginid. ':home_binding">����ͬ����</a>',

	'xwb_reply_from_2' => '���� %s ������΢��',

	'xwb_weibo' => '΢��',

	);

