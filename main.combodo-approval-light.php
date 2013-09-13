<?php
// Copyright (C) 2013 Combodo SARL
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
 * Module approval-light
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

		$sOQL = MetaModel::GetModuleSetting('combodo-approval-light', 'approver_select', 'SELECT Person AS p  WHERE id = :this->approver_id');
		$oSearch = DBObjectSearch::FromOQL($sOQL);
		if (!MetaModel::IsParentClass('Contact', $oSearch->GetClass()))
		{
			throw new Exception('Wrong class for approver_select query. Expecting a class derived from Contact, found: '.$oSearch->GetClass());
		}
		$oApproverSet = new DBObjectSet($oSearch, array(), $oObject->ToArgs('this'));	
		if ($oApproverSet->count() == 0)
		{
			return null;
		}

		$oScheme = new UserRequestApprovalScheme();	

		$aContacts = array();		
		while ($oApprover = $oApproverSet->Fetch())
		{
			$aContacts[] = array(
				'class' => get_class($oApprover),
				'id' => $oApprover->GetKey(),
			);
		}
		$iTimeoutDelay = MetaModel::GetModuleSetting('combodo-approval-light', 'approval_timeout_delay', '');
		$bApproveOnTimeOut = MetaModel::GetModuleSetting('combodo-approval-light', 'approve_on_timeout', false);
		$iExitCondition = self::EXIT_ON_FIRST_REJECT; // this is the default
		$oScheme->AddStep($aContacts, $iTimeoutDelay*86400 /*timeout (s)*/, $bApproveOnTimeOut, $iExitCondition);	

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
