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
            7 => '<input type="hidden" name="mobile_phone" id = "mobile_phone" value="{$bean->phone_mobile}">',
            8 => '<input type="hidden" name="current_user_id" id = "current_user_id" value="{$current_user->id}">',
          ),
          'buttons' =>
          array(
            0 => array(
              'customCode' => '
              <input 
                title="Save" 
                accesskey="a" 
                class="button primary" 
                onclick="
                  var _form = document.getElementById(\'EditView\'); 
                  _form.action.value=\'Save\'; 
                  if(check_form(\'EditView\'))
                    SUGAR.ajaxUI.submitForm(_form);
                    return false;" 
                type="submit" 
                name="button" 
                value="Save" 
                id="SAVE"
              >'
            ),
            1 => 'CANCEL',
            2 => array(
              'customCode' => '
              <input 
                title="Call" 
                accesskey="a" 
                class="button primary" 
                type="button" 
                name="button" 
                value="Call" 
                id="call_to_lead"
              >'
            )
          ),
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
            'file' => 'custom/modules/Leads/ajax_dropdown.js',
          )
        ),
        'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
        'useTabs' => true,
        'tabDefs' =>
        array(
          'LBL_CONTACT_INFORMATION' =>
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
          0 => array(
            0 => 'security_code',
          ),
          1 =>
          array(
            0 => 'first_name',
            1 => array(
              'name' => 'phone_mobile',
              'label' => 'LBL_PHONE_MOBILE',
              'displayParams' =>
              array(
                'required' => true,
              ),
            ),
          ),
          2 =>
          array(
            0 => 'phone_work',
            1 => 'phone_other',
          ),
          3 =>
          array(
            0 => 'card_id',
            1 => 'birthdate',
          ),
          4 =>
          array(
            0 => 'campaign_name',
            1 => 'assigned_user_name',
          ),
          5 =>
          array(
            0 => 'call_status_lead',
            1 => array(
              'name' => 'call_status_description_lead',
              'label' => 'LBL_DETAIL_CALL_STATUS',
              'displayParams' =>
              array(
                'key' => 'primary',
                'rows' => 2,
                'cols' => 30,
                'maxlength' => 150,
              ),
            ),
          ),
          6 =>
          array(
            0 => 'processing_date',
            1 => 'statement_date',
          ),
        ),
      ),
    ),
  );;
