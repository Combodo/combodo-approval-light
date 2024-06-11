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
Dict::Add('FR FR', 'French', 'Français', [
	'Approbation:ApprovalRequested' => 'Votre approbation est attendue',
	'Approbation:FormBody' => '<p>Cher $approver->html(friendlyname)$, merci de prendre le temps d\'approuver le ticket</p>',
	'Approbation:Introduction' => '<p>Cher $approver->html(friendlyname)$, merci de prendre le temps d\'approuver le ticket $object->html(friendlyname)$</p>',
	'Approbation:PublicObjectDetails' => '<p>Cher $approver->html(friendlyname)$, merci de prendre le temps d\'approuver le ticket $object->html(ref)$</p>
				      <b>Demandeur</b>&nbsp;: $object->html(caller_id_friendlyname)$<br>
				      <b>Titre</b>&nbsp;: $object->html(title)$<br>
				      <b>Service</b>&nbsp;: $object->html(service_name)$<br>
				      <b>Sous catégorie de service</b>&nbsp;: $object->html(servicesubcategory_name)$<br>
				      <b>Description</b>&nbsp;:<br>
				      $object->html(description)$',
	'Class:UserRequest/Stimulus:ev_approve' => 'Approuver',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => 'Rejeter',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequestApprovalScheme' => 'Schéma d\'approbation pour demande utilisateur',
	'Class:UserRequestApprovalScheme+' => '',
	'Menu:Ongoing approval' => 'Requêtes en attente d\'approbation',
	'Menu:Ongoing approval+' => 'Requêtes en attente d\'approbation',
]);
