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
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', [
	'Approbation:ApprovalRequested' => 'Su aprobación es requerida',
	'Approbation:FormBody' => '<p>Estimado(a) $approver->html(friendlyname)$, por favor tome un tiempo para aprobar o rechazar el ticket</p>',
	'Approbation:Introduction' => '<p>Estimado(a) $approver->html(friendlyname)$, por favor tome un tiempo para aprobar o rechazar el ticket $object->html(friendlyname)$</p>',
	'Approbation:PublicObjectDetails' => '<p>Estimado(a) $approver->html(friendlyname)$, por favor tome un tiempo para aprobar o rechazar el ticket $object->html(ref)$</p>
				      <b>Solicitante</b>: $object->html(caller_id_friendlyname)$<br>
				      <b>Asunto</b>: $object->html(title)$<br>
				      <b>Servicio</b>: $object->html(service_name)$<br>
				      <b>Subcategoria de Servicio</b>: $object->html(servicesubcategory_name)$<br>
				      <b>Descripción</b>:<br>			     
				      $object->html(description)$<br>
				      <b>Información Adicional</b>:<br>
				      <div>$object->html(service_details)$</div>',
	'Class:UserRequest/Stimulus:ev_approve' => 'Approve~~',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => 'Reject~~',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequestApprovalScheme' => 'UserRequestApprovalScheme~~',
	'Class:UserRequestApprovalScheme+' => '~~',
	'Menu:Ongoing approval' => 'Requerimientos esperando Aprobación',
	'Menu:Ongoing approval+' => 'Requerimientos esperando Aprobación',
]);
