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
Dict::Add('CS CZ', 'Czech', 'Čeština', [
	'Approbation:ApprovalRequested' => 'Je požadováno schválení',
	'Approbation:FormBody' => '<p>Vážený/á $approver->html(friendlyname)$, prosíme o schválení nebo zamítnutí požadavku</p>',
	'Approbation:Introduction' => '<p>Vážený/á $approver->html(friendlyname)$, prosíme o schválení nebo zamítnutí požadavku $object->html(friendlyname)$</p>',
	'Approbation:PublicObjectDetails' => '<p>Vážený/á $approver->html(friendlyname)$, prosíme o schválení nebo zamítnutí požadavku $object->html(ref)$</p>
				      <b>Volající</b>: $object->html(caller_id_friendlyname)$<br>
				      <b>Předmět</b>: $object->html(title)$<br>
				      <b>Služba</b>: $object->html(service_name)$<br>
				      <b>Podkategorie služeb</b>: $object->html(servicesubcategory_name)$<br>
				      <b>Popis</b>:<br>				     
				      $object->html(description)$',
	'Class:UserRequest/Stimulus:ev_approve' => 'Schválit',
	'Class:UserRequest/Stimulus:ev_approve+' => 'Schválení požadavku',
	'Class:UserRequest/Stimulus:ev_reject' => 'Zamítnout',
	'Class:UserRequest/Stimulus:ev_reject+' => 'Zamítnutí požadavku',
	'Class:UserRequestApprovalScheme' => 'UserRequestApprovalScheme~~',
	'Class:UserRequestApprovalScheme+' => '~~',
	'Menu:Ongoing approval' => 'Požadavky čekající na schválení',
	'Menu:Ongoing approval+' => 'Požadavky čekající na schválení',
]);
