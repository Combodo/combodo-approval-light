<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	// Dictionary entries go here
	'Menu:Ongoing approval' => '等待审批的需求',
	'Menu:Ongoing approval+' => '等待审批的需求',
	'Approbation:PublicObjectDetails' => '<p>尊敬的$approver->html(friendlyname)$, 请抽空审批工单$object->html(ref)$</p>
				      <b>发起人</b>: $object->html(caller_id_friendlyname)$<br>
				      <b>标题</b>: $object->html(title)$<br>
				      <b>服务</b>: $object->html(service_name)$<br>
				      <b>子服务</b>: $object->html(servicesubcategory_name)$<br>
				      <b>说明</b>:<br>				     
				      $object->html(description)$~~',
	'Approbation:FormBody' => '<p>尊敬的$approver->html(friendlyname)$, 请抽空审批工单</p>',
	'Approbation:ApprovalRequested' => '需要您的审批',
	'Approbation:Introduction' => '<p>尊敬的$approver->html(friendlyname)$, 请抽空审批工单$object->html(friendlyname)$</p>',
));
//
// Class: UserRequestApprovalScheme
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:UserRequestApprovalScheme' => '用户请求审批方案',
	'Class:UserRequestApprovalScheme+' => '~~',
));

//
// Class: UserRequest
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:UserRequest/Stimulus:ev_approve' => '同意',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => '驳回',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
));
