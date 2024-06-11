<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 * @author Erwan Taloc <erwan.taloc@combodo.com>
 * @author Romain Quetiez <romain.quetiez@combodo.com>
 * @author Denis Flaven <denis.flaven@combodo.com>
 *
 */
Dict::Add('PL PL', 'Polish', 'Polski', [
	'Approbation:ApprovalRequested' => 'Your approval is requested~~',
	'Approbation:FormBody' => '<p>Dear $approver->html(friendlyname)$, please take some time to approve or reject the ticket</p>~~',
	'Approbation:Introduction' => '<p>Dear $approver->html(friendlyname)$, please take some time to approve or reject ticket $object->html(friendlyname)$</p>~~',
	'Approbation:PublicObjectDetails' => '<p>Dear $approver->html(friendlyname)$, please take some time to approve or reject ticket $object->html(ref)$</p>
				      <b>Caller</b>: $object->html(caller_id_friendlyname)$<br>
				      <b>Title</b>: $object->html(title)$<br>
				      <b>Service</b>: $object->html(service_name)$<br>
				      <b>Service subcategory</b>: $object->html(servicesubcategory_name)$<br>
				      <b>Description</b>:<br>				     
				      $object->html(description)$~~',
	'Class:UserRequest/Stimulus:ev_approve' => 'Approve~~',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => 'Reject~~',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequestApprovalScheme' => 'UserRequestApprovalScheme~~',
	'Class:UserRequestApprovalScheme+' => '~~',
	'Menu:Ongoing approval' => 'Requests waiting for approval~~',
	'Menu:Ongoing approval+' => 'Requests waiting for approval~~',
]);
