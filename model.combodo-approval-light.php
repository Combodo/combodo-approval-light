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
 * Module approval-demo
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */



class UserRequestApprovalScheme extends ApprovalScheme
{
	public static function Init()
	{
		$aParams = array
		(
			"category" => "",
			"key_type" => "autoincrement",
			"name_attcode" => array("obj_class", "obj_key"),
			"state_attcode" => "",
			"reconc_keys" => array(),
			"db_table" => "userrequest_approval_scheme",
			"db_key_field" => "id",
			"db_finalclass_field" => "",
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
	}

	 	
	public static function GetApprovalScheme($oObject, $sReachingState)
	{


		if ((get_class($oObject) != 'UserRequest'))
		{

			return null;
		}
		if ($sReachingState != 'waiting_for_approval')
		{
			return null;
		}
	

		$sOQL = "SELECT Person AS p JOIN UserRequest AS ur ON ur.approver_id=p.id WHERE ur.id = :id";
	
		$oApproverSet = new DBObjectSet(DBObjectSearch::FromOQL($sOQL),
					array(),
					array(
					'id' => $oObject->GetKey(),	
					)
		);	

		if ($oApproverSet->count() == 0)
		{
			return null;
		}

		$oScheme = new UserRequestApprovalScheme();	

		$aContacts = array();		
		$oApprover = $oApproverSet->Fetch();
			$aContacts[] = array(
				'class' => 'Person',
				'id' => $oApprover->GetKey()
			);
		$iTimeoutDelay = MetaModel::GetModuleSetting('combodo-approval-light', 'approval_timeout_delay', '');
		$sApproveOnTimeOut = MetaModel::GetModuleSetting('combodo-approval-light', 'approve_on_timeout', '');
		$oScheme->AddStep($aContacts, $iTimeoutDelay*86400 /*timeout (s)*/, $sApproveOnTimeOut /* approve on timeout*/);	
		return $oScheme;
	}

	public function GetEmailSubject($sContactClass, $iContactId)
	{
		$sEmailSubject = Dict::S('Approbation:ApprovalSubject');
		return $sEmailSubject;
	}


	public function GetEmailBody($sContactClass, $iContactId)
	{
		$sBody = Dict::S('Approbation:ApprovalBody');
		return $sBody;

	}

	public function GetFormBody($sContactClass, $iContactId)
	{
		$sBody = Dict::S('Approbation:FormBody');
		return $sBody;

	}

	 	
	public function GetTitle($sContactClass, $iContactId)
	{
		$sValue = Dict::S('Approbation:ApprovalRequested');
		return $sValue;
	}

	 	
	public function GetIntroduction($sContactClass, $iContactId)
	{
		$sIntroduction = Dict::S('Approbation:Introduction');
		return $sIntroduction;
	}

 	
	public function DoApprove(&$oObject)
	{
		$oObject->ApplyStimulus('ev_approve');
	}

	 	
	public function DoReject(&$oObject)
	{
		$oObject->ApplyStimulus('ev_reject');
	}
}

$oMyMenuGroup = new MenuGroup('RequestManagement', 30 /* fRank */);
new WebPageMenuNode('Ongoing approval',utils::GetAbsoluteUrlAppRoot().'/env-production/approval-base/report.php?class=UserRequest',$oMyMenuGroup->GetIndex(),6);
?>
