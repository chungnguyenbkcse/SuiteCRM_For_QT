<?php 
 //WARNING: The contents of this file are auto-generated


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

$dictionary['Lead'] = array('table' => 'leads', 'audited' => true, 'unified_search' => true, 'full_text_search' => true, 'unified_search_default_enabled' => true, 'duplicate_merge' => true,
    'comment' => 'Leads are persons of interest early in a sales cycle', 'fields' => array(


        'converted' =>
        array(
            'name' => 'converted',
            'vname' => 'LBL_CONVERTED',
            'type' => 'bool',
            'default' => '0',
            'exportable' => false,
            'importable' => false,
            'comment' => 'Has Lead been converted to a Contact (and other Sugar objects)'
        ),
        'call_status_disbursement' => array(
            'name' => 'call_status_disbursement',
            'vname' => 'LBL_CALL_STATUS_DISBURSEMENT',
            'type' => 'enum',
            'options' => 'call_status_disbursement_dom',
            'len' => '255',
            'exportable' => false,
            'importable' => false,
            'comment' => 'How did the disbursement call come about',
        ),
        'card_number' => array(
            'name' => 'card_number',
            'vname' => 'LBL_CARD_NUMBER',
            'type' => 'varchar',
            'len' => '100',
            'comment' => 'Card number of the card',
            'exportable' => false,
            'importable' => false,
        ),
        'cvv' => array(
            'name' => 'cvv',
            'vname' => 'LBL_CVV',
            'type' => 'varchar',
            'len' => '100',
            'comment' => 'CVV of the card',
            'exportable' => false,
            'importable' => false,
        ),
        'expiration_date' => array(
            'name' => 'expiration_date',
            'vname' => 'LBL_EXPIRATION_DATE',
            'type' => 'varchar',
            'len' => '100',
            'comment' => 'Expiration date of the card',
            'exportable' => false,
            'importable' => false,
        ),
        'amount_to_enter_vimo' => array(
            'name' => 'amount_to_enter_vimo',
            'vname' => 'LBL_AMOUNT_TO_ENTER_VIMO',
            'type' => 'double',
            'comment' => 'Amount money to enter vimo',
            'exportable' => false,
            'importable' => false,
        ),

        'amount_actually_received' => array(
            'name' => 'amount_actually_received',
            'vname' => 'LBL_AMOUNT_ACTUALLY_RECEIVED',
            'type' => 'double',
            'comment' => 'Amount money actually received',
            'exportable' => false,
            'importable' => false,
        ),

        'total_transactions' => array(
            'name' => 'total_transactions',
            'vname' => 'LBL_TOTAL_TRANSACTIONS',
            'type' => 'int',
            'comment' => 'Total transactions of contract',
            'exportable' => false,
            'importable' => false,
        ),

        'donation_month' => array(
            'name' => 'donation_month',
            'vname' => 'LBL_DONATION_MONTH',
            'type' => 'int',
            'comment' => 'Donation month of contract',
            'exportable' => false,
            'importable' => false,
        ),

        'contribution_amount' => array(
            'name' => 'contribution_amount',
            'vname' => 'LBL_CONTRIBUTION_AMOUNT',
            'type' => 'double',
            'comment' => 'Contribution amount of contract',
            'exportable' => false,
            'importable' => false,
        ),

        'bank_account' => array(
            'name' => 'bank_account',
            'vname' => 'LBL_BANK_ACCOUNT',
            'type' => 'varchar',
            'len' => '100',
            'comment' => 'Bank account of contract',
            'exportable' => false,
            'importable' => false,
        ),       
        
        'assigned_user_id' =>
        array(
            'name' => 'assigned_user_id',
            'rname' => 'user_name',
            'id_name' => 'assigned_user_id',
            'vname' => 'LBL_ASSIGNED_TO_ID',
            'group'=>'assigned_user_name',
            'type' => 'relate',
            'table' => 'users',
            'module' => 'Users',
            'reportable'=>true,
            'exportable' => true,
            'importable' => true,
            'isnull' => 'false',
            'dbType' => 'id',
            'audited'=>true,
            'comment' => 'User ID assigned to record',
            'duplicate_merge'=>'disabled'
        ),

        'id' => array(
            'name' => 'id',
            'vname' => 'LBL_ID',
            'type' => 'id',
            'required' => true,
            'exportable' => false,
            'importable' => false,
        ),

        'deleted' => array(
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'required'=>false,
        'reportable'=>false,
        'exportable' => false,
        'importable' => false,
        'comment' => 'Record deletion indicator',
        ),

        'description' => array(
            'name' => 'description',
            'vname' => 'LBL_DESCRIPTION',
            'type' => 'text',
            'comment' => 'Full text of the note',
            'rows' => 6,
            'cols' => 80,
            'exportable' => false,
            'importable' => false,
        ),
        'date_entered' => array(
            'name' => 'date_entered',
            'vname' => 'LBL_DATE_ENTERED',
            'type' => 'datetime',
            'group' => 'created_by_name',
            'comment' => 'Date record created',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
            'inline_edit' => false,
            'exportable' => false,
            'importable' => false,
        ),
        'date_modified' => array(
            'name' => 'date_modified',
            'vname' => 'LBL_DATE_MODIFIED',
            'type' => 'datetime',
            'group' => 'modified_by_name',
            'comment' => 'Date record last modified',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
            'inline_edit' => false,
            'exportable' => false,
            'importable' => false,
        ),
        'modified_user_id' => array(
            'name' => 'modified_user_id',
            'rname' => 'user_name',
            'id_name' => 'modified_user_id',
            'vname' => 'LBL_MODIFIED',
            'type' => 'assigned_user_name',
            'table' => 'users',
            'isnull' => 'false',
            'group' => 'modified_by_name',
            'dbType' => 'id',
            'reportable' => true,
            'comment' => 'User who last modified record',
            'massupdate' => false,
            'inline_edit' => false,
            'exportable' => false,
            'importable' => false,
        ),
        'modified_by_name' => array(
            'name' => 'modified_by_name',
            'vname' => 'LBL_MODIFIED_NAME',
            'type' => 'relate',
            'reportable' => false,
            'source' => 'non-db',
            'rname' => 'user_name',
            'table' => 'users',
            'id_name' => 'modified_user_id',
            'module' => 'Users',
            'link' => 'modified_user_link',
            'duplicate_merge' => 'disabled',
            'massupdate' => false,
            'inline_edit' => false,
            'exportable' => false,
            'importable' => false,
        ),
        'created_by' => array(
            'name' => 'created_by',
            'rname' => 'user_name',
            'id_name' => 'modified_user_id',
            'vname' => 'LBL_CREATED',
            'type' => 'assigned_user_name',
            'table' => 'users',
            'isnull' => 'false',
            'dbType' => 'id',
            'group' => 'created_by_name',
            'comment' => 'User who created record',
            'massupdate' => false,
            'inline_edit' => false,
            'exportable' => false,
            'importable' => false,
        ),
        'created_by_name' => array(
            'name' => 'created_by_name',
            'vname' => 'LBL_CREATED',
            'type' => 'relate',
            'reportable' => false,
            'link' => 'created_by_link',
            'rname' => 'user_name',
            'source' => 'non-db',
            'table' => 'users',
            'id_name' => 'created_by',
            'module' => 'Users',
            'duplicate_merge' => 'disabled',
            'exportable' => false,
            'importable' => false,
            'massupdate' => false,
            'inline_edit' => false,
        ),
        'website' => array(
            'name' => 'website',
            'vname' => 'LBL_WEBSITE',
            'type' => 'url',
            'dbType' => 'varchar',
            'len' => 255,
            'exportable' => false,
            'importable' => false,
            'comment' => 'URL of website for the company',
        ),
        'salutation' => array(
            'name' => 'salutation',
            'vname' => 'LBL_SALUTATION',
            'type' => 'enum',
            'options' => 'salutation_dom',
            'massupdate' => false,
            'len' => '255',
            'exportable' => false,
            'importable' => false,
            'comment' => 'Contact salutation (e.g., Mr, Ms)'
        ),
        'last_name' => array(
            'name' => 'last_name',
            'vname' => 'LBL_LAST_NAME',
            'type' => 'varchar',
            'len' => '100',
            'unified_search' => true,
            'full_text_search' => array('boost' => 3),
            'comment' => 'Last name of the contact',
            'merge_filter' => 'selected',
            'exportable' => false,
            'importable' => false,
            'importable' => 'required',
        ),
        'security_code' => array(
            'name' => 'security_code',
            'vname' => 'LBL_SECURITY_CODE',
            'type' => 'varchar',
            'len' => '100',
            'comment' => 'Last name of the contact',
        ),
        'card_bank' => array(
            'name' => 'card_bank',
            'vname' => 'LBL_CARD_BANK',
            'type' => 'varchar',
            'len' => '100',
            'comment' => 'Last name of the contact',
        ),
        'card_amount' => array(
            'name' => 'card_amount',
            'vname' => 'LBL_CARD_AMOUNT',
            'type' => 'float',
            'comment' => 'Last name of the contact',
        ),
        'card_rest' => array(
            'name' => 'card_rest',
            'vname' => 'LBL_CARD_REST',
            'type' => 'float',
            'comment' => 'Last name of the contact',
        ),
        'interest_rate' => array(
            'name' => 'interest_rate',
            'vname' => 'LBL_INTEREST_RATE',
            'type' => 'varchar',
            'len' => '100',
            'comment' => 'Last name of the contact',
        ),
        'title' => array(
            'name' => 'title',
            'vname' => 'LBL_TITLE',
            'type' => 'varchar',
            'len' => '100',
            'exportable' => false,
            'importable' => false,
            'comment' => 'The title of the contact'
        ),
        'photo' => array(
            'name' => 'photo',
            'vname' => 'LBL_PHOTO',
            'type' => 'image',
            'massupdate' => false,
            'comments' => '',
            'help' => '',
            'exportable' => false,
            'importable' => false,
            'reportable' => true,
            'len' => 255,
            'dbType' => 'varchar',
            'width' => '160',
            'height' => '160',
            'studio' => array('listview' => true),
        ),
        'do_not_call' => array(
            'name' => 'do_not_call',
            'vname' => 'LBL_DO_NOT_CALL',
            'type' => 'bool',
            'default' => '0',
            'audited' => true,
            'exportable' => false,
            'importable' => false,
            'comment' => 'An indicator of whether contact can be called'
        ),
        'phone_mobile' => array(
            'name' => 'phone_mobile',
            'vname' => 'LBL_MOBILE_PHONE',
            'type' => 'phone',
            'dbType' => 'varchar',
            'len' => 100,
            'unified_search' => true,
            'full_text_search' => array('boost' => 1),
            'comment' => 'Mobile phone number of the contact',
            'merge_filter' => 'enabled',
        ),
        'phone_work' => array(
            'name' => 'phone_work',
            'vname' => 'LBL_OFFICE_PHONE',
            'type' => 'phone',
            'dbType' => 'varchar',
            'len' => 100,
            'audited' => true,
            'exportable' => false,
            'importable' => false,
            'unified_search' => true,
            'full_text_search' => array('boost' => 1),
            'comment' => 'Work phone number of the contact',
            'merge_filter' => 'enabled',
        ),
        'phone_other' => array(
            'name' => 'phone_other',
            'vname' => 'LBL_OTHER_PHONE',
            'type' => 'phone',
            'dbType' => 'varchar',
            'len' => 100,
            'exportable' => false,
            'importable' => false,
            'unified_search' => true,
            'full_text_search' => array('boost' => 1),
            'comment' => 'Other phone number for the contact',
            'merge_filter' => 'enabled',
        ),
        'phone_fax' => array(
            'name' => 'phone_fax',
            'vname' => 'LBL_FAX_PHONE',
            'type' => 'phone',
            'dbType' => 'varchar',
            'len' => 100,
            'unified_search' => true,
            'exportable' => false,
            'importable' => false,
            'full_text_search' => array('boost' => 1),
            'comment' => 'Contact fax number',
            'merge_filter' => 'enabled',
        ),
        'email' => array(
            'name' => 'email',
            'type' => 'email',
            'query_type' => 'default',
            'source' => 'non-db',
            'operator' => 'subquery',
            'exportable' => false,
            'importable' => false,
            'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
            'db_field' => array(
                'id',
            ),
            'vname' => 'LBL_ANY_EMAIL',
        ),
        'email1' => array(
            'name' => 'email1',
            'vname' => 'LBL_EMAIL_ADDRESS',
            'type' => 'varchar',
            'function' => array(
                'name' => 'getEmailAddressWidget',
                'returns' => 'html'
            ),
            'source' => 'non-db',
            'group' => 'email1',
            'merge_filter' => 'enabled',
            'exportable' => false,
            'importable' => false,
            'studio' => array('editview' => true, 'editField' => true, 'searchview' => false, 'popupsearch' => false),
            // bug 46859
            'full_text_search' => array('boost' => 3, 'analyzer' => 'whitespace'),
            //bug 54567
        ),
        'email2' => array(
            'name' => 'email2',
            'vname' => 'LBL_OTHER_EMAIL_ADDRESS',
            'type' => 'varchar',
            'function' => array(
                'name' => 'getEmailAddressWidget',
                'returns' => 'html'
            ),
            'source' => 'non-db',
            'group' => 'email2',
            'exportable' => false,
            'importable' => false,
            'merge_filter' => 'enabled',
            'studio' => 'false',
        ),
        'invalid_email' => array(
            'name' => 'invalid_email',
            'vname' => 'LBL_INVALID_EMAIL',
            'source' => 'non-db',
            'type' => 'bool',
            'massupdate' => false,
            'exportable' => false,
            'importable' => false,
            'studio' => 'false',
        ),
        'email_opt_out' => array(
            'name' => 'email_opt_out',
            'vname' => 'LBL_EMAIL_OPT_OUT',
            'source' => 'non-db',
            'type' => 'bool',
            'massupdate' => false,
            'exportable' => false,
            'importable' => false,
            'studio' => 'false',
        ),
        'lawful_basis' => array(
            'name' => 'lawful_basis',
            'vname' => 'LBL_LAWFUL_BASIS',
            'type' => 'multienum',
            'massupdate' => true,
            'no_default' => false,
            'comments' => '',
            'inline_edit' => true,
            'reportable' => true,
            'exportable' => false,
            'importable' => false,
            'merge_filter' => 'enabled',
            'len' => 100,
            'size' => '20',
            'options' => 'lawful_basis_dom',
            'audited' => true,
        ),
        'date_reviewed' => array(
            'name' => 'date_reviewed',
            'vname' => 'LBL_DATE_REVIEWED',
            'type' => 'date',
            'massupdate' => true,
            'audited' => true,
            'exportable' => false,
            'importable' => false,
        ),
        'lawful_basis_source' => array(
            'name' => 'lawful_basis_source',
            'vname' => 'LBL_LAWFUL_BASIS_SOURCE',
            'type' => 'enum',
            'massupdate' => true,
            'no_default' => false,
            'comments' => '',
            'inline_edit' => true,
            'reportable' => true,
            'merge_filter' => 'enabled',
            'len' => 100,
            'size' => '20',
            'options' => 'lawful_basis_source_dom',
            'audited' => true,
            'exportable' => false,
            'importable' => false,
        ),
        'primary_address_street_2' => array(
            'name' => 'primary_address_street_2',
            'vname' => 'LBL_PRIMARY_ADDRESS_STREET_2',
            'type' => 'varchar',
            'len' => '150',
            'source' => 'non-db',
            'exportable' => false,
            'importable' => false,
        ),
        
        'primary_address_street_3' => array(
            'name' => 'primary_address_street_3',
            'vname' => 'LBL_PRIMARY_ADDRESS_STREET_3',
            'type' => 'varchar',
            'len' => '150',
            'source' => 'non-db',
            'exportable' => false,
            'importable' => false,
        ),
        'primary_address_city' => array(
            'name' => 'primary_address_city',
            'vname' => 'LBL_PRIMARY_ADDRESS_CITY',
            'type' => 'varchar',
            'len' => '100',
            'group' => 'primary_address',
            'comment' => 'City for primary address',
            'merge_filter' => 'enabled',
            'exportable' => false,
            'importable' => false,
        ),
        'primary_address_state' => array(
            'name' => 'primary_address_state',
            'vname' => 'LBL_PRIMARY_ADDRESS_STATE',
            'type' => 'varchar',
            'len' => '100',
            'group' => 'primary_address',
            'comment' => 'State for primary address',
            'merge_filter' => 'enabled',
            'exportable' => false,
            'importable' => false,
        ),
        'primary_address_postalcode' => array(
            'name' => 'primary_address_postalcode',
            'vname' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
            'type' => 'varchar',
            'len' => '20',
            'group' => 'primary_address',
            'comment' => 'Postal code for primary address',
            'merge_filter' => 'enabled',
            'exportable' => false,
            'importable' => false,

        ),
        'primary_address_country' => array(
            'name' => 'primary_address_country',
            'vname' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
            'type' => 'varchar',
            'group' => 'primary_address',
            'comment' => 'Country for primary address',
            'merge_filter' => 'enabled',
            'exportable' => false,
            'importable' => false,
        ),
        'alt_address_street' => array(
            'name' => 'alt_address_street',
            'vname' => 'LBL_ALT_ADDRESS_STREET',
            'type' => 'varchar',
            'len' => '150',
            'group' => 'alt_address',
            'comment' => 'Street address for alternate address',
            'merge_filter' => 'enabled',
            'exportable' => false,
            'importable' => false,
        ),
        'alt_address_street_2' => array(
            'name' => 'alt_address_street_2',
            'vname' => 'LBL_ALT_ADDRESS_STREET_2',
            'type' => 'varchar',
            'len' => '150',
            'source' => 'non-db',
            'exportable' => false,
            'importable' => false,
        ),
        'alt_address_street_3' => array(
            'name' => 'alt_address_street_3',
            'vname' => 'LBL_ALT_ADDRESS_STREET_3',
            'type' => 'varchar',
            'len' => '150',
            'source' => 'non-db',
            'exportable' => false,
            'importable' => false,
        ),
        'alt_address_city' => array(
            'name' => 'alt_address_city',
            'vname' => 'LBL_ALT_ADDRESS_CITY',
            'type' => 'varchar',
            'len' => '100',
            'group' => 'alt_address',
            'comment' => 'City for alternate address',
            'merge_filter' => 'enabled',
            'exportable' => false,
            'importable' => false,
        ),
        'alt_address_state' => array(
            'name' => 'alt_address_state',
            'vname' => 'LBL_ALT_ADDRESS_STATE',
            'type' => 'varchar',
            'len' => '100',
            'group' => 'alt_address',
            'comment' => 'State for alternate address',
            'merge_filter' => 'enabled',
            'exportable' => false,
            'importable' => false,
        ),
        'alt_address_postalcode' => array(
            'name' => 'alt_address_postalcode',
            'vname' => 'LBL_ALT_ADDRESS_POSTALCODE',
            'type' => 'varchar',
            'len' => '20',
            'group' => 'alt_address',
            'comment' => 'Postal code for alternate address',
            'merge_filter' => 'enabled',
            'exportable' => false,
            'importable' => false,
        ),
        'alt_address_country' => array(
            'name' => 'alt_address_country',
            'vname' => 'LBL_ALT_ADDRESS_COUNTRY',
            'type' => 'varchar',
            'group' => 'alt_address',
            'comment' => 'Country for alternate address',
            'merge_filter' => 'enabled',
            'exportable' => false,
            'importable' => false,
        ),
        'assistant' => array(
            'name' => 'assistant',
            'vname' => 'LBL_ASSISTANT',
            'type' => 'varchar',
            'len' => '75',
            'unified_search' => true,
            'full_text_search' => array('boost' => 2),
            'comment' => 'Name of the assistant of the contact',
            'merge_filter' => 'enabled',
            'exportable' => false,
            'importable' => false,
        ),
        'assistant_phone' => array(
            'name' => 'assistant_phone',
            'vname' => 'LBL_ASSISTANT_PHONE',
            'type' => 'phone',
            'dbType' => 'varchar',
            'len' => 100,
            'group' => 'assistant',
            'unified_search' => true,
            'full_text_search' => array('boost' => 1),
            'comment' => 'Phone number of the assistant of the contact',
            'merge_filter' => 'enabled',
            'exportable' => false,
            'importable' => false,
        ),
        // 'email_addresses' => array(
        //     'name' => 'email_addresses',
        //     'type' => 'link',
        //     'relationship' => strtolower($object_name) . '_email_addresses',
        //     'source' => 'non-db',
        //     'vname' => 'LBL_EMAIL_ADDRESSES',
        //     'reportable' => false,
        //     'exportable' => false,
        //     'importable' => false,
        //     'unified_search' => true,
        //     'rel_fields' => array('primary_address' => array('type' => 'bool')),
        // ),
        // Used for non-primary mail import
        'email_addresses_non_primary' => array(
            'name' => 'email_addresses_non_primary',
            'type' => 'email',
            'source' => 'non-db',
            'vname' => 'LBL_EMAIL_NON_PRIMARY',
            'studio' => false,
            'reportable' => false,
            'massupdate' => false,
            'exportable' => false,
            'importable' => false,
        ),
        'card_id' =>
        array(
            'name' => 'card_id',
            'type' => 'id',
            'vname' => 'LBL_CARD_ID',
            'comment' => 'Card Id of lead'
        ),
        'processing_date' =>
        array(
            'name' => 'processing_date',
            'vname' => 'LBL_PROCESSING_DATE',
            'massupdate' => false,
            'exportable' => false,
            'importable' => false,
            'type' => 'date',
            'comment' => 'The processing date of the leads'
        ),

        'statement_date' =>
        array(
            'name' => 'statement_date',
            'vname' => 'LBL_STATEMENT_DATE',
            'massupdate' => false,
            'type' => 'date',
            'exportable' => false,
            'importable' => false,
            'comment' => 'The statement date of the leads'
        ),

        // 'statement_date_1' =>
        // array(
        //     'name' => 'statement_date_1',
        //     'vname' => 'LBL_STATEMENT_DATE_1',
        //     'massupdate' => false,
        //     'type' => 'date',
        //     'comment' => 'The statement date of the leads'
        // ),

        'sale_stage' =>
        array(
            'name' => 'sale_stage',
            'vname' => 'LBL_SALE_STAGE',
            'type' => 'enum',
            'options' => 'sale_stage_dom',
            'len' => '255',
            'exportable' => false,
            'importable' => false,
            'comment' => 'How did the sale stage come about',
        ),

        'lead_status' =>
        array(
            'name' => 'lead_status',
            'vname' => 'LBL_LEAD_STATUS',
            'type' => 'enum',
            'options' => 'call_status_description_lead_dom',
            'len' => '255',
            'exportable' => false,
            'importable' => false,
            'comment' => 'How did the lead status come about',
        ),

        'call_status_lead' => array(
            'name' => 'call_status_lead',
            'vname' => 'LBL_CALL_STATUS',
            'type' => 'enum',
            'options' => 'call_status_lead_dom',
            'len' => '255',
            'exportable' => false,
            'importable' => false,
            'comment' => 'How did the lead call come about',
        ),

        'call_status_description_lead' => array(
            'name' => 'call_status_description_lead',
            'vname' => 'LBL_DETAIL_CALL_STATUS',
            'type' => 'enum',
            'options' => 'call_status_description_lead_dom',
            'len' => '255',
            'exportable' => false,
            'importable' => false,
            'comment' => 'How did the lead call come about',
        ),

        'refered_by' =>
            array(
                'name' => 'refered_by',
                'vname' => 'LBL_REFERED_BY',
                'type' => 'varchar',
                'len' => '100',
                'exportable' => false,
                'importable' => false,
                'comment' => 'Identifies who refered the lead',
                'merge_filter' => 'enabled',
            ),
        'lead_source' =>
            array(
                'name' => 'lead_source',
                'vname' => 'LBL_LEAD_SOURCE',
                'type' => 'enum',
                'options' => 'lead_source_dom',
                'len' => '100',
                'audited' => true,
                'exportable' => false,
                'importable' => false,
                'comment' => 'Lead source (ex: Web, print)',
                'merge_filter' => 'enabled',
            ),
        'lead_source_description' =>
            array(
                'name' => 'lead_source_description',
                'vname' => 'LBL_LEAD_SOURCE_DESCRIPTION',
                'type' => 'text',
                'group' => 'lead_source',
                'exportable' => false,
                'importable' => false,
                'comment' => 'Description of the lead source'
            ),
        'status' =>
            array(
                'name' => 'status',
                'vname' => 'LBL_STATUS',
                'type' => 'enum',
                'len' => '100',
                'exportable' => false,
                'importable' => false,
                'options' => 'lead_status_dom',
                'audited' => true,
                'comment' => 'Status of the lead',
                'merge_filter' => 'enabled',
            ),
        'status_description' =>
            array(
                'name' => 'status_description',
                'vname' => 'LBL_STATUS_DESCRIPTION',
                'type' => 'text',
                'group' => 'status',
                'exportable' => false,
                'importable' => false,
                'comment' => 'Description of the status of the lead'
            ),
        'department' =>
            array(
                'name' => 'department',
                'vname' => 'LBL_DEPARTMENT',
                'type' => 'varchar',
                'len' => '100',
                'exportable' => false,
                'importable' => false,
                'comment' => 'Department the lead belongs to',
                'merge_filter' => 'enabled',
            ),
        'reports_to_id' =>
            array(
                'name' => 'reports_to_id',
                'vname' => 'LBL_REPORTS_TO_ID',
                'type' => 'id',
                'exportable' => false,
                'importable' => false,
                'reportable' => false,
                'comment' => 'ID of Contact the Lead reports to'
            ),
        'report_to_name' =>
            array(
                'name' => 'report_to_name',
                'rname' => 'name',
                'id_name' => 'reports_to_id',
                'vname' => 'LBL_REPORTS_TO',
                'type' => 'relate',
                'table' => 'contacts',
                'isnull' => 'true',
                'module' => 'Contacts',
                'dbType' => 'varchar',
                'len' => 'id',
                'source' => 'non-db',
                'reportable' => false,
                'massupdate' => false,
                'exportable' => false,
                'importable' => false,
            ),
        'reports_to_link' => array(
            'name' => 'reports_to_link',
            'type' => 'link',
            'relationship' => 'lead_direct_reports',
            'link_type' => 'one',
            'side' => 'right',
            'source' => 'non-db',
            'vname' => 'LBL_REPORTS_TO',
            'reportable' => false,
            'exportable' => false,
            'importable' => false,
        ),
        'reportees' => array(
            'name' => 'reportees',
            'type' => 'link',
            'relationship' => 'lead_direct_reports',
            'link_type' => 'many',
            'side' => 'left',
            'source' => 'non-db',
            'vname' => 'LBL_REPORTS_TO',
            'reportable' => false,
            'exportable' => false,
            'importable' => false,
        ),
        'contacts' => array(
            'name' => 'contacts',
            'type' => 'link',
            'relationship' => 'contact_leads',
            'module' => "Contacts",
            'source' => 'non-db',
            'vname' => 'LBL_CONTACTS',
            'reportable' => false,
            'exportable' => false,
            'importable' => false,
        ),
        'account_name' =>
            array(
                'name' => 'account_name',
                'vname' => 'LBL_ACCOUNT_NAME',
                'type' => 'varchar',
                'len' => '255',
                'unified_search' => true,
                'full_text_search' => 1,
                'comment' => 'Account name for lead',
                'exportable' => false,
            'importable' => false,
            ),


        'accounts' =>
            array(
                'name' => 'accounts',
                'type' => 'link',
                'relationship' => 'account_leads',
                'link_type' => 'one',
                'source' => 'non-db',
                'vname' => 'LBL_ACCOUNT',
                'duplicate_merge' => 'disabled',
                'exportable' => false,
                'importable' => false,
            ),

        'account_description' =>
            array(
                'name' => 'account_description',
                'vname' => 'LBL_ACCOUNT_DESCRIPTION',
                'type' => 'text',
                'group' => 'account_name',
                'unified_search' => true,
                'full_text_search' => 1,
                'comment' => 'Description of lead account',
                'exportable' => false,
                'importable' => false,
            ),
        'contact_id' =>
            array(
                'name' => 'contact_id',
                'type' => 'id',
                'reportable' => false,
                'vname' => 'LBL_CONTACT_ID',
                'comment' => 'If converted, Contact ID resulting from the conversion',
                'exportable' => false,
                'importable' => false,
            ),
        'contact' => array(
            'name' => 'contact',
            'type' => 'link',
            'link_type' => 'one',
            'relationship' => 'contact_leads',
            'source' => 'non-db',
            'vname' => 'LBL_LEADS',
            'reportable' => false,
            'exportable' => false,
            'importable' => false,
        ),
        'account_id' =>
            array(
                'name' => 'account_id',
                'type' => 'id',
                'reportable' => false,
                'vname' => 'LBL_ACCOUNT_ID',
                'comment' => 'If converted, Account ID resulting from the conversion',
                'exportable' => false,
                'importable' => false,
            ),
        'opportunity_id' =>
            array(
                'name' => 'opportunity_id',
                'type' => 'id',
                'reportable' => false,
                'vname' => 'LBL_OPPORTUNITY_ID',
                'comment' => 'If converted, Opportunity ID resulting from the conversion',
                'exportable' => false,
                'importable' => false,
            ),
        'opportunity' => array(
            'name' => 'opportunity',
            'type' => 'link',
            'link_type' => 'one',
            'relationship' => 'opportunity_leads',
            'source' => 'non-db',
            'vname' => 'LBL_OPPORTUNITIES',
            'exportable' => false,
            'importable' => false,
        ),
        'opportunity_name' =>
            array(
                'name' => 'opportunity_name',
                'vname' => 'LBL_OPPORTUNITY_NAME',
                'type' => 'varchar',
                'len' => '255',
                'comment' => 'Opportunity name associated with lead',
                'exportable' => false,
                'importable' => false,
            ),
        'opportunity_amount' =>
            array(
                'name' => 'opportunity_amount',
                'vname' => 'LBL_OPPORTUNITY_AMOUNT',
                'type' => 'varchar',
                'group' => 'opportunity_name',
                'len' => '50',
                'comment' => 'Amount of the opportunity',
                'exportable' => false,
                'importable' => false,
            ),
        'campaign_id' =>
            array(
                'name' => 'campaign_id',
                'type' => 'id',
                'reportable' => false,
                'exportable' => false,
                'importable' => false,
                'vname' => 'LBL_CAMPAIGN_ID',
                'comment' => 'Campaign that generated lead',
            ),

        'campaign_name' =>
            array(
                'name' => 'campaign_name',
                'rname' => 'name',
                'id_name' => 'campaign_id',
                'vname' => 'LBL_CAMPAIGN',
                'type' => 'relate',
                'link' => 'campaign_leads',
                'table' => 'campaigns',
                'isnull' => 'true',
                'module' => 'Campaigns',
                'source' => 'non-db',
                'exportable' => false,
                'importable' => false,
                'additionalFields' => array('id' => 'campaign_id')
            ),
        'campaign_leads' =>
            array(
                'name' => 'campaign_leads',
                'type' => 'link',
                'vname' => 'LBL_CAMPAIGN_LEAD',
                'relationship' => 'campaign_leads',
                'source' => 'non-db',
                'exportable' => false,
                'importable' => false,
            ),
        'c_accept_status_fields' =>
            array(
                'name' => 'c_accept_status_fields',
                'rname' => 'id',
                'relationship_fields' => array('id' => 'accept_status_id', 'accept_status' => 'accept_status_name'),
                'vname' => 'LBL_LIST_ACCEPT_STATUS',
                'type' => 'relate',
                'link' => 'calls',
                'link_type' => 'relationship_info',
                'source' => 'non-db',
                'importable' => 'false',
                'duplicate_merge' => 'disabled',
                'studio' => false,
                'exportable' => false,
                'importable' => false,
            ),
        'm_accept_status_fields' =>
            array(
                'name' => 'm_accept_status_fields',
                'rname' => 'id',
                'relationship_fields' => array('id' => 'accept_status_id', 'accept_status' => 'accept_status_name'),
                'vname' => 'LBL_LIST_ACCEPT_STATUS',
                'type' => 'relate',
                'link' => 'meetings',
                'link_type' => 'relationship_info',
                'source' => 'non-db',
                'importable' => 'false',
                'hideacl' => true,
                'duplicate_merge' => 'disabled',
                'studio' => false,
                'exportable' => false,
                'importable' => false,
            ),
        'accept_status_id' =>
            array(
                'name' => 'accept_status_id',
                'type' => 'varchar',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_ACCEPT_STATUS',
                'studio' => array('listview' => false),
                'exportable' => false,
                'importable' => false,
            ),
        'accept_status_name' =>
            array(
                'massupdate' => false,
                'name' => 'accept_status_name',
                'type' => 'enum',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_ACCEPT_STATUS',
                'options' => 'dom_meeting_accept_status',
                'importable' => 'false',
                'exportable' => false,
                'importable' => false,
            ),
        'webtolead_email1' =>
            array(
                'name' => 'webtolead_email1',
                'vname' => 'LBL_EMAIL_ADDRESS',
                'type' => 'email',
                'len' => '100',
                'source' => 'non-db',
                'comment' => 'Main email address of lead',
                'importable' => 'false',
                'studio' => 'false',
                'exportable' => false,
                'importable' => false,
            ),
        'webtolead_email2' =>
            array(
                'name' => 'webtolead_email2',
                'vname' => 'LBL_OTHER_EMAIL_ADDRESS',
                'type' => 'email',
                'len' => '100',
                'source' => 'non-db',
                'comment' => 'Secondary email address of lead',
                'importable' => 'false',
                'studio' => 'false',
                'exportable' => false,
                'importable' => false,
            ),
        'webtolead_email_opt_out' =>
            array(
                'name' => 'webtolead_email_opt_out',
                'vname' => 'LBL_EMAIL_OPT_OUT',
                'type' => 'bool',
                'source' => 'non-db',
                'comment' => 'Indicator signaling if lead elects to opt out of email campaigns',
                'massupdate' => false,
                'studio' => 'false',
                'exportable' => false,
                'importable' => false,
            ),
        'webtolead_invalid_email' =>
            array(
                'name' => 'webtolead_invalid_email',
                'vname' => 'LBL_INVALID_EMAIL',
                'type' => 'bool',
                'source' => 'non-db',
                'comment' => 'Indicator that email address for lead is invalid',
                'massupdate' => false,
                'studio' => 'false',
                'exportable' => false,
                'importable' => false,
            ),
        'birthdate' =>
            array(
                'name' => 'birthdate',
                'vname' => 'LBL_BIRTHDATE',
                'massupdate' => false,
                'type' => 'date',
                'comment' => 'The birthdate of the contact'
            ),

        'portal_name' =>
            array(
                'name' => 'portal_name',
                'vname' => 'LBL_PORTAL_NAME',
                'type' => 'varchar',
                'len' => '255',
                'group' => 'portal',
                'comment' => 'Portal user name when lead created via lead portal',
                'studio' => 'false',
                'exportable' => false,
                'importable' => false,
            ),
        'portal_app' =>
            array(
                'name' => 'portal_app',
                'vname' => 'LBL_PORTAL_APP',
                'type' => 'varchar',
                'group' => 'portal',
                'len' => '255',
                'comment' => 'Portal application that resulted in created of lead',
                'studio' => 'false',
                'exportable' => false,
                'importable' => false,
            ),

        'tasks' =>
            array(
                'name' => 'tasks',
                'type' => 'link',
                'relationship' => 'lead_tasks',
                'source' => 'non-db',
                'vname' => 'LBL_TASKS',
                'exportable' => false,
                'importable' => false,
            ),
        'notes' =>
            array(
                'name' => 'notes',
                'type' => 'link',
                'relationship' => 'lead_notes',
                'source' => 'non-db',
                'vname' => 'LBL_NOTES',
            ),
        'meetings' =>
            array(
                'name' => 'meetings',
                'type' => 'link',
                'relationship' => 'meetings_leads',
                'source' => 'non-db',
                'vname' => 'LBL_MEETINGS',
                'exportable' => false,
                'importable' => false,
            ),
        'calls' =>
            array(
                'name' => 'calls',
                'type' => 'link',
                'relationship' => 'calls_leads',
                'source' => 'non-db',
                'vname' => 'LBL_CALLS',
                'exportable' => false,
                'importable' => false,
            ),
        'oldmeetings' =>
            array(
                'name' => 'oldmeetings',
                'type' => 'link',
                'relationship' => 'lead_meetings',
                'source' => 'non-db',
                'vname' => 'LBL_MEETINGS',
                'exportable' => false,
                'importable' => false,
            ),
        'oldcalls' =>
            array(
                'name' => 'oldcalls',
                'type' => 'link',
                'relationship' => 'lead_calls',
                'source' => 'non-db',
                'vname' => 'LBL_CALLS',
                'exportable' => false,
                'importable' => false,
            ),
        'emails' =>
            array(
                'name' => 'emails',
                'type' => 'link',
                'relationship' => 'emails_leads_rel',
                'source' => 'non-db',
                'unified_search' => true,
                'vname' => 'LBL_EMAILS',
                'exportable' => false,
                'importable' => false,
            ),
        'email_addresses' =>
            array(
                'name' => 'email_addresses',
                'type' => 'link',
                'relationship' => 'leads_email_addresses',
                'source' => 'non-db',
                'vname' => 'LBL_EMAIL_ADDRESSES',
                'reportable' => false,
                'exportable' => false,
                'importable' => false,
                'rel_fields' => array('primary_address' => array('type' => 'bool')),
            ),
        'email_addresses_primary' =>
            array(
                'name' => 'email_addresses_primary',
                'type' => 'link',
                'relationship' => 'leads_email_addresses_primary',
                'source' => 'non-db',
                'vname' => 'LBL_EMAIL_ADDRESS_PRIMARY',
                'duplicate_merge' => 'disabled',
                'exportable' => false,
                'importable' => false,
            ),
        'campaigns' =>
            array(
                'name' => 'campaigns',
                'type' => 'link',
                'relationship' => 'lead_campaign_log',
                'module' => 'CampaignLog',
                'bean_name' => 'CampaignLog',
                'source' => 'non-db',
                'vname' => 'LBL_CAMPAIGNLOG',
                'exportable' => false,
                'importable' => false,
            ),
        'prospect_lists' =>
            array(
                'name' => 'prospect_lists',
                'type' => 'link',
                'relationship' => 'prospect_list_leads',
                'module' => 'ProspectLists',
                'source' => 'non-db',
                'vname' => 'LBL_PROSPECT_LIST',
                'exportable' => false,
                'importable' => false,
            ),
        'fp_events_leads_1' =>
            array(
                'name' => 'fp_events_leads_1',
                'type' => 'link',
                'relationship' => 'fp_events_leads_1',
                'source' => 'non-db',
                'vname' => 'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE',
                'exportable' => false,
                'importable' => false,
            ),
        'e_invite_status_fields' =>
            array(
                'name' => 'e_invite_status_fields',
                'rname' => 'id',
                'relationship_fields' =>
                    array(
                        'id' => 'event_invite_id',
                        'invite_status' => 'event_status_name',
                    ),
                'vname' => 'LBL_CONT_INVITE_STATUS',
                'type' => 'relate',
                'link' => 'fp_events_leads_1',
                'link_type' => 'relationship_info',
                'join_link_name' => 'fp_events_leads_1',
                'source' => 'non-db',
                'importable' => 'false',
                'duplicate_merge' => 'disabled',
                'studio' => false,
                'exportable' => false,
                'importable' => false,
            ),
        'event_status_name' =>
            array(
                'massupdate' => false,
                'name' => 'event_status_name',
                'type' => 'enum',
                'studio' => 'false',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_INVITE_STATUS_EVENT',
                'options' => 'fp_event_invite_status_dom',
                'importable' => 'false',
                'exportable' => false,
                'importable' => false,
            ),
        'event_invite_id' =>
            array(
                'name' => 'event_invite_id',
                'type' => 'varchar',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_INVITE_STATUS',
                'exportable' => false,
                'importable' => false,
                'studio' =>
                    array(
                        'listview' => false,
                    ),
            ),
        'e_accept_status_fields' =>
            array(
                'name' => 'e_accept_status_fields',
                'rname' => 'id',
                'relationship_fields' =>
                    array(
                        'id' => 'event_status_id',
                        'accept_status' => 'event_accept_status',
                    ),
                'vname' => 'LBL_CONT_ACCEPT_STATUS',
                'type' => 'relate',
                'link' => 'fp_events_leads_1',
                'link_type' => 'relationship_info',
                'join_link_name' => 'fp_events_leads_1',
                'source' => 'non-db',
                'importable' => 'false',
                'duplicate_merge' => 'disabled',
                'studio' => false,
                'exportable' => false,
                'importable' => false,
            ),
        'event_accept_status' =>
            array(
                'massupdate' => false,
                'name' => 'event_accept_status',
                'type' => 'enum',
                'studio' => 'false',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_ACCEPT_STATUS_EVENT',
                'options' => 'fp_event_status_dom',
                'importable' => 'false',
                'exportable' => false,
                'importable' => false,
            ),
        'event_status_id' =>
            array(
                'name' => 'event_status_id',
                'type' => 'varchar',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_ACCEPT_STATUS',
                'exportable' => false,
                'importable' => false,
                'studio' =>
                    array(
                        'listview' => false,
                    ),
            ),

    )
, 'indices' => array(
        array('name' => 'idx_lead_acct_name_first', 'type' => 'index', 'fields' => array('account_name', 'deleted')),
        array('name' => 'idx_lead_last_first', 'type' => 'index', 'fields' => array('last_name', 'first_name', 'deleted')),
        array('name' => 'idx_lead_del_stat', 'type' => 'index', 'fields' => array('last_name', 'status', 'deleted', 'first_name')),
        array('name' => 'idx_lead_opp_del', 'type' => 'index', 'fields' => array('opportunity_id', 'deleted',)),
        array('name' => 'idx_leads_acct_del', 'type' => 'index', 'fields' => array('account_id', 'deleted',)),
        array('name' => 'idx_del_user', 'type' => 'index', 'fields' => array('deleted', 'assigned_user_id')),
        array('name' => 'idx_lead_assigned', 'type' => 'index', 'fields' => array('assigned_user_id')),
        array('name' => 'idx_lead_contact', 'type' => 'index', 'fields' => array('contact_id')),
        array('name' => 'idx_reports_to', 'type' => 'index', 'fields' => array('reports_to_id')),
        array('name' => 'idx_lead_phone_work', 'type' => 'index', 'fields' => array('phone_work')),
        array('name' => 'idx_leads_id_del', 'type' => 'index', 'fields' => array('id', 'deleted',)),

    )
, 'relationships' => array(
        'lead_direct_reports' => array('lhs_module' => 'Leads', 'lhs_table' => 'leads', 'lhs_key' => 'id',
            'rhs_module' => 'Leads', 'rhs_table' => 'leads', 'rhs_key' => 'reports_to_id',
            'relationship_type' => 'one-to-many'),
        'lead_tasks' => array('lhs_module' => 'Leads', 'lhs_table' => 'leads', 'lhs_key' => 'id',
            'rhs_module' => 'Tasks', 'rhs_table' => 'tasks', 'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many', 'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Leads')
    , 'lead_notes' => array('lhs_module' => 'Leads', 'lhs_table' => 'leads', 'lhs_key' => 'id',
            'rhs_module' => 'Notes', 'rhs_table' => 'notes', 'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many', 'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Leads')

    , 'lead_meetings' => array('lhs_module' => 'Leads', 'lhs_table' => 'leads', 'lhs_key' => 'id',
            'rhs_module' => 'Meetings', 'rhs_table' => 'meetings', 'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many', 'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Leads')

    , 'lead_calls' => array('lhs_module' => 'Leads', 'lhs_table' => 'leads', 'lhs_key' => 'id',
            'rhs_module' => 'Calls', 'rhs_table' => 'calls', 'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many', 'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Leads')

    , 'lead_emails' => array('lhs_module' => 'Leads', 'lhs_table' => 'leads', 'lhs_key' => 'id',
            'rhs_module' => 'Emails', 'rhs_table' => 'emails', 'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many', 'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Leads'),
        'lead_campaign_log' => array(
            'lhs_module' => 'Leads',
            'lhs_table' => 'leads',
            'lhs_key' => 'id',
            'rhs_module' => 'CampaignLog',
            'rhs_table' => 'campaign_log',
            'rhs_key' => 'target_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'target_type',
            'relationship_role_column_value' => 'Leads'
        )

    )
    //This enables optimistic locking for Saves From EditView
, 'optimistic_locking' => true,
);

unset($dictionary['Lead']['fields']['call_status_lead']['options']);
unset($dictionary['Lead']['fields']['call_status_description_lead']['options']);
$dictionary['Lead']['fields']['call_status_lead']['function'] = 'getCallStatusLeadFromDb';

VardefManager::createVardef('Leads', 'Lead', array('default', 'assignable', 'security_groups',
    'person'));


 // created: 2022-06-21 05:44:05
$dictionary['Lead']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2022-06-21 05:44:04
$dictionary['Lead']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2022-06-21 05:44:04
$dictionary['Lead']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2022-06-21 05:44:03
$dictionary['Lead']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>