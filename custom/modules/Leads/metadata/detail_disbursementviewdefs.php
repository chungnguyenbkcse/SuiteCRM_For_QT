<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

$viewdefs ['Leads'] =
array(
  'DetailView_1' =>
  array(
    'templateMeta' =>
    array(
      'form' =>
      array(
        'hidden' =>
        array(
            0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
            1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
            2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
            3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
            4 => '<input type="hidden" name="call_status_description_id" id = "call_status_description_id" value="{$bean->call_status_description_lead}">',
            5 => '<input type="hidden" name="lead_id" id = "lead_id" value="{$bean->id}">',
            6 => '<input type="hidden" name="user_id" id = "user_id" value="{$bean->assigned_user_id}">',
        ),
        'buttons' =>
        array(
          0 => "EDIT",
        ),
        'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
      ),
      'maxColumns' => '2',
      'widths' =>
      array(
        0 =>
        array(
          'label' => '10',
          'field' => '30',
        ),
        1 =>
        array(
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' =>
      array(
        0 =>
        array(
          'file' => 'modules/Leads/Lead.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' =>
      array(
        'LBL_CONTACT_INFORMATION' =>
        array(
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' =>
        array(
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' =>
        array(
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' =>
    array(
      'LBL_CONTACT_INFORMATION' =>
      array(
        0 =>
        array(
          0 => 'first_name',
          1 => array (
              'name' => 'phone_mobile',
              'label' => 'LBL_PHONE_MOBILE',
              'displayParams' =>
              array(
                  'required' => true,
              ),
          ),
        ),
        1 =>
        array(
          0 => 'card_id',
          1 => 'call_status_disbursement'
        ),
        2 =>
        array(
          0 => 'card_bank',
          1 => 'card_number',
        ),
        3 =>
        array(
          0 => 'cvv',
          1 => 'expiration_date',
        ),
        4 =>
        array(
          0 => 'bank_account',
          1 => 'amount_to_enter_vimo',
        ),
        5 =>
        array(
          0 => 'amount_actually_received',
          1 => 'total_transactions',
        ),
        6 =>
        array(
          0 => 'donation_month',
          1 => 'total_transactions',
        ),
        7 =>
        array(
          0 => 'contribution_amount',
        ),
        8 =>
        array(
          0 => array(
            'label' => 'LBL_CARD_IMAGE',
            'name' => 'campaign_name',
            'customCode' => '
              <div class="row">
                <div class="main_view col-lg-12">
                </div>
                <div class="side_view">
                  <img src="{$foo}" onclick="change(this.src)">
                </div>
              </div>',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' =>
      array(
        0 =>
        array(
          0 => 'status',
          1 => 'lead_source',
        ),
        1 =>
        array(
          0 => 'status_description',
          1 => 'lead_source_description',
        ),
        2 =>
        array(
          0 => 'opportunity_amount',
          1 => 'refered_by',
        ),
        3 =>
        array(
          0 =>
          array(
            'name' => 'campaign_name',
            'label' => 'LBL_CAMPAIGN',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' =>
      array(
        0 =>
        array(
          0 =>
          array(
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
          1 =>
          array(
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
        ),
      ),
    ),
  ),
);