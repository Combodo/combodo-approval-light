<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 *
 */
Dict::Add('ZH CN', 'Chinese', '简体中文', [
	'Approbation:ApprovalRequested' => '需要您的审批',
	'Approbation:FormBody' => '<p>尊敬的$approver->html(friendlyname)$, 请抽空审批工单</p>',
	'Approbation:Introduction' => '<p>尊敬的$approver->html(friendlyname)$, 请抽空审批工单$object->html(friendlyname)$</p>',
	'Approbation:PublicObjectDetails' => '<p>尊敬的$approver->html(friendlyname)$, 请抽空审批工单$object->html(ref)$</p>
				      <b>发起人</b>: $object->html(caller_id_friendlyname)$<br>
				      <b>标题</b>: $object->html(title)$<br>
				      <b>服务</b>: $object->html(service_name)$<br>
				      <b>子服务</b>: $object->html(servicesubcategory_name)$<br>
				      <b>说明</b>:<br>				     
				      $object->html(description)$',
	'Class:UserRequest/Stimulus:ev_approve' => '同意',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => '驳回',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequestApprovalScheme' => '用户请求审批方案',
	'Class:UserRequestApprovalScheme+' => '~~',
	'Menu:Ongoing approval' => '等待审批的需求',
	'Menu:Ongoing approval+' => '等待审批的需求',
]);
