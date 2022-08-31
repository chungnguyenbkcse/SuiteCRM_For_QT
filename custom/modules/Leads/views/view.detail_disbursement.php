<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
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

require_once('custom/include/MVC/View/views/view.detail_1.php');
class CustomLeadsViewdetail_disbursement extends ViewDetail_1
{
    /* public function preDisplay()
    {
        parent::preDisplay();
        $this->dv->defs['panels']['LBL_CONTACT_INFORMATION'] = array ();
        $this->dv->defs['panels']['LBL_CONTACT_INFORMATION'][] = array (
                0 => 'first_name',
                1 => array (
                    'name' => 'phone_mobile',
                    'label' => 'LBL_PHONE_MOBILE',
                    'displayParams' =>
                    array(
                        'required' => true,
                    ),
                ),
        );

        $this->dv->defs['panels']['LBL_CONTACT_INFORMATION'][] = array (
            0 => 'card_id',
        );

        $this->dv->defs['panels']['LBL_CONTACT_INFORMATION'][] = array (
            0 => 'card_bank',
            1 => 'card_number',
        );

        $this->dv->defs['panels']['LBL_CONTACT_INFORMATION'][] = array (
            0 => 'cvv',
            1 => 'expiration_date',
        );

        $this->dv->defs['panels']['LBL_CONTACT_INFORMATION'][] = array (
            0 => 'bank_account',
            1 => 'amount_to_enter_vimo',
        );

        $this->dv->defs['panels']['LBL_CONTACT_INFORMATION'][] = array (
            0 => 'amount_actually_received',
            1 => 'total_transactions',
        );

        $this->dv->defs['panels']['LBL_CONTACT_INFORMATION'][] = array (
            0 => 'donation_month',
            1 => 'total_transactions',
        );

        $this->dv->defs['panels']['LBL_CONTACT_INFORMATION'][] = array (
            0 => 'contribution_amount',
        );
    } */

/*     public function preDisplay()
    {

        $metadataFile = "custom/modules/Leads/metadata/detail_disbursementviewdefs.php";

        $this->dv = new DetailView2();
        $this->dv->ss = &$this->ss;
        $this->dv->setup($this->module, $this->bean, $metadataFile, get_custom_file_if_exists('include/DetailView/DetailView.tpl'), true, 'detail_disbursementviewdefs');
    } */
    
}
