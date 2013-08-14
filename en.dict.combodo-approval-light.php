<?php
// Copyright (C) 2012 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Menu:Ongoing approval' => 'Requests waiting for approval',
	'Menu:Ongoing approval+' => 'Requests waiting for approval',
	'Approbation:ApprovalSubject' => 'Your approval is requested: $object->ref$',
	'Approbation:ApprovalBody' => '<p>Dear $approver->friendlyname$, please take some time to approve or reject ticket $object->ref$</p>
				      <h3>Title : $object->title$</h3>
				      <pre>Description:<pre>
				      <pre>$object->description$<pre>
				      <pre>Caller: $object->caller_id_friendlyname$</pre>
				      <pre>Service: $object->service_name$</pre>
				      <pre>Service Category: $object->servicesubcategory_name$</pre>
				      <pre>Details:<pre>
				      <pre>$object->public_log$<pre>',
	'Approbation:FormBody' => '<p>Dear $approver->friendlyname$, please take some time to approve or reject the ticket</p>',
	'Approbation:ApprovalRequested' => 'Your approval is requested',
	'Approbation:Introduction' => '<p>Dear $approver->friendlyname$, please take some time to approve or reject ticket $object->friendlyname$</p>',


));


?>
