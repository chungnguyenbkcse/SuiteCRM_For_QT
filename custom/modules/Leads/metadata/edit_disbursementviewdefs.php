<?php
$viewdefs['Leads'] =
    array(
        'EditView' =>
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
                        0 => 'SAVE',
                        1 => 'CANCEL',
                    ),
                    'headerTpl' => 'include/EditView/header.tpl',
                    'footerTpl' => 'include/EditView/footer.tpl',
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
                        'file' => 'custom/modules/Leads/handle_card_image.js',
                    )
                ),
                'useTabs' => false,
                'tabDefs' =>
                array(
                    'DEFAULT' =>
                    array(
                        'newTab' => false,
                        'panelDefault' => 'expanded',
                    ),
                ),
            ),
            'panels' =>
            array(
                'default' =>
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
                    1 => array(
                        0 => 'card_id',
                        1 => 'call_status_disbursement'
                    ),
                    2 =>
                    array(
                        0 => 'card_bank',
                        1 => 'card_number',
                    ),
                    3 => 
                    array (
                        0 => 'cvv',
                        1 => 'expiration_date',
                    ),
                    4 => 
                    array (
                        0 => 'bank_account',
                        1 => 'amount_to_enter_vimo',
                    ),
                    5 => 
                    array (
                        0 => 'amount_actually_received',
                        1 => 'total_transactions',
                    ),
                    6 => 
                    array (
                        0 => 'donation_month',
                        1 => 'total_transactions',
                    ),
                    7 => 
                    array (
                        0 => 'contribution_amount',
                        1 =>  array (
                            'name' => 'contribution_amount',
                            'label' => 'LBL_CARD_IMAGE',
                            'customCode' => '<input type="file" id="files_card_image" name="files[]" multiple>',
                        ),
                    ),
                ),
            ),
        )
    );
