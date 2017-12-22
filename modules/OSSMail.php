<?php
/* ********************************************************************************
 *  Language     : 简体中文
 *  Version      : 4..2.514
 *  Author       : idercn.com | http://www.idercn.com
 *  Update Date  : 2017-12-22
  ********************************************************************************  
 * 此语言包版权如下所示：
 * 此文件内容受 vtigerCRM 的公共许可证1.0版保护，
 * 使用此文件表示您已默认遵守相关许可规定。
 * 您可以在遵守此许可证 "AS IS" 的基础上对软件进行分发。
 * 此语言包遵循 知识共享署名-非商业性使用-相同方式共享 2.5 中国大陆许可协议(Creative Commons) 2.5，
 * 大家可以免费下载使用，但请注明来源，并署名 · 非商业性使用 · 相同方式共享。
 * idercn无任何形式的担保，明示或暗示的保证。
 *+***********************************************************************************/
/**
 * OSSMail english translation
 * @package YetiForce.Language
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 */
$languageStrings = [
	'OSSMail' => '我的邮箱',
	'OSSMail_manual' => '邮件模块',
	'Roundcube config' => 'Roundcube设置',
	'Uninstall' => '卸载',
	'Cancel' => '取消',
	'Removed relationship' => '关联已被删除',
	'Add relationship' => '关联已被添加',
	'Unread messages' => '未读邮件',
	'LBL_CHECK_CONFIG' => '检查配置',
	'LBL_RC_product_name' => '名称',
	'LBL_RC_language' => '语言（RFC 1766 代码）︰en_US，pl_PL',
	'LBL_RC_username_domain' => '域（自动添加到登录）',
	'LBL_RC_support_url' => '支持地址的链接',
	'LBL_RC_smtp_user' => '登录到SMTP服务器（"%u"-登录用户的用户名）',
	'LBL_RC_smtp_pass' => 'SMTP服务器密码 ("%p"-登录用户的密码)',
	'LBL_RC_smtp_port' => 'SMTP 端口 （默认为 25; 465 ssl; 587）',
	'LBL_RC_smtp_server' => 'SMTP 服务器的名称',
	'LBL_RC_default_port' => '用于连接到IMAP的端口',
	'LBL_RC_default_host' => 'IMAP服务器的名称',
	'LBL_RC_debug_level' => '调试级别 (1=日志; 4=显示，8=跟踪)',
	'LBL_RC_skin_logo' => 'Logo',
	'LBL_RC_ip_check' => '在授权时检查客户端的IP地址',
	'LBL_RC_enable_spellcheck' => '拼写检查模块',
	'LBL_RC_identities_level' => '访问级别',
	'LBL_RC_auto_create_user' => '在登录时自动创建新用户',
	'LBL_RC_smtp_log' => '保存已发送邮件的日志',
	'LBL_RC_mail_pagesize' => '列表视图中的邮件数',
	'LBL_RC_addressbook_pagesize' => '在列表视图中的联系人数量',
	'LBL_RC_prefer_html' => '以html格式显示消息',
	'LBL_RC_preview_pane' => '如果预览窗格是激活的',
	'LBL_RC_htmleditor' => '在HTML格式的邮件',
	'LBL_RC_draft_autosave' => '自动保存创建的消息每:（秒）',
	'LBL_RC_mdn_requests' => '如果消息需要传递通知，如何处理',
	'LBL_RC_session_lifetime' => '会话的有效期（分钟)',
	'LBL_RC_sendmail_delay' => '发送消息时的延迟时间',
	'LBL_RC_date_long' => '日期格式',
	'LBL_RC_validate_cert' => '验证证书',
	'LBL_RC_imap_open_add_connection_type' => '向地址中添加类型和协议',
	'identities_level_0' => '多个可以编辑所有参数的身份',
	'identities_level_1' => '多个可以编辑所有参数（不包含邮件地址）的身份',
	'identities_level_2' => '一个可编辑所有参数的身份',
	'identities_level_3' => '一个可可以编辑所有参数（不包含邮件地址）的身份',
	'identities_level_4' => '一个只能编辑签名的身份',
	'htmleditor_0' => '从不',
	'htmleditor_1' => '总是',
	'htmleditor_2' => '以HTML格式邮件的答复',
	'htmleditor_3' => '以HTML格式邮件转发或回复',
	'mdn_requests_0' => '询问用户',
	'mdn_requests_1' => '自动发送',
	'mdn_requests_2' => '忽略',
	'mdn_requests_3' => '如果发件人在通讯簿中则自动发送，否则询问用户',
	'mdn_requests_4' => '如果发件人在通讯簿中则自动，否则忽略',
	'LBL_SAVE' => '保存设置',
	'Mails List' => '最新的电子邮件',
	'LBL_NOMAILSLIST' => '没有邮件',
	'To' => '收件人',
	'LBL_MAIL_NOT_FOUND_IN_DB' => '在数据库中找不到邮件.',
	'LBL_IMPORT_MAIL_MANUALLY' => '手动导入邮件',
	'LBL_RELATIONS' => '公司/联系人',
	'LBL_PROCESS' => '流程',
	'LBL_SUB_PROCESS' => '子流程',
	'LBL_REMOVE_RELATION' => '删除关联',
	'LBL_ADD_RECORD' => '创建记录',
	'LBL_SELECT_RECORD' => '关联到已有记录',
	'LBL_ADD_CALENDAR' => '添加事件',
	'LBL_ADD_MODCOMMENTS' => '添加评论',
	'LBL_ADD_HELPDESK' => '添加服务单',
	'LBL_ADD_PRODUCTS' => '添加产品',
	'LBL_ADD_SERVICES' => '添加服务',
	'LBL_SEND_MASS_EMAIL' => '批量发送电子邮件',
	'LBL_NUMBER_OF_FOUND_MAIL_ADDRESSES' => '查找到的邮件地址数量',
	'LBL_NUMBER_OF_SELECTED_RECORDS' => '所选记录的数量',
	'LBL_MINIMIZE_BAR' => '最小化工具条',
	//BTN
	'LBL_CREATEMAIL' => '发送电子邮件',
];
$jsLanguageStrings = [
	'NoFindEmailInRecord' => '记录没有电子邮件地址',
	'AddFindEmailInRecord' => '已下载的电子邮件',
	'StartedDownloadingEmail' => '已开始下载的电子邮件',
];
