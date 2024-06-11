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
 * @author Robert Jaehne <robert.jaehne@itomig.de>
 *
 */
Dict::Add('DE DE', 'German', 'Deutsch', [
	'Approbation:ApprovalRequested' => 'Ihre Freigabeanfrage wurde erstellt',
	'Approbation:FormBody' => '<p>Sehr geehrte/r $approver->html(friendlyname)$, bitte nehmen sie sich etwas Zeit, um das Ticket zu bearbeiten</p>',
	'Approbation:Introduction' => '<p>Sehr geehrte/r $approver->html(friendlyname)$, bitte nehmen sie sich etwas Zeit, um $object->html(friendlyname)$ Ticket zu bearbeiten</p>',
	'Approbation:PublicObjectDetails' => '<p>Sehr geehrte/r $approver->html(friendlyname)$, bitte nehmen sie sich etwas Zeit, um Ticket $object->html(ref)$ zu bearbeiten</p>
		<h3>Titel : $object->html(title)$</h3>
		<p>Beschreibung:</p>
		$object->html(description)$
		<p>Ersteller: $object->html(caller_id_friendlyname)$</p>
		<p>Service: $object->html(service_name)$</p>
		<p>Servicekategorie: $object->html(servicesubcategory_name)$</p>',
	'Class:UserRequest/Stimulus:ev_approve' => 'Approve~~',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => 'Reject~~',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequestApprovalScheme' => 'UserRequestApprovalScheme~~',
	'Class:UserRequestApprovalScheme+' => '~~',
	'Menu:Ongoing approval' => 'Auf Freigabe wartende Anfragen',
	'Menu:Ongoing approval+' => 'Auf Freigabe wartende Anfragen',
]);
