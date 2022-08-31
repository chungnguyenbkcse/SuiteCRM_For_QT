{*

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




*}
{literal}

    <style>
        .link {
            text-decoration: underline
        }
        #thead-show-history-import {
            background-color: rgb(64, 51, 189);
            color: #ffffff;
        }

        #result {
            color: red;
            margin-bottom: 50px;
            margin-top: -50px;
            font-size: 15px;
            font-weight: bold;
        }

    </style>
{/literal}


{$INSTRUCTION}

<div class="hr"></div>
{if $IMPORT_MODULE != "Leads"}
<form enctype="multipart/form-data" name="importstep2" method="POST" action="index.php" id="importstep2">
    <input type="hidden" name="module" value="Import" id="module">
    <input type="hidden" name="custom_delimiter" value="{$CUSTOM_DELIMITER}" id="custom_delimiter">
    <input type="hidden" name="custom_enclosure" value="{$CUSTOM_ENCLOSURE}" id="custom_enclosure">
    <input type="hidden" name="source" value="{$SOURCE}" id="source">
    <input type="hidden" name="source_id" value="{$SOURCE_ID}" id="source_id">
    <input type="hidden" name="action" value="Confirm" id="action">
    <input type="hidden" name="current_step" value="{$CURRENT_STEP}" id="current_step">
    <input type="hidden" name="import_module" value="{$IMPORT_MODULE}" id="import_module">
    <input type="hidden" name="from_admin_wizard" value="{$smarty.request.from_admin_wizard}" id="from_admin_wizard">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                    {if $IMPORT_MODULE != "Leads"}
                        <tr>
                            <td align="left" scope="row" colspan="4" style="padding-left: 10px;">{$SAMPLE_URL}
                                &nbsp;{sugar_help text=$MOD.LBL_SAMPLE_URL_HELP}</td>
                        </tr>
                    {/if}
                    <tr>
                        <td scope="row" colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td scope="row" colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="left" scope="row">
                            <span>
                                <label for="userfile">
                                    {$MOD.LBL_SELECT_FILE}
                                    {if $IMPORT_MODULE == "Leads"} 
                                    {$SAMPLE_URL} 
                                    {/if}
                                </label>
                                <input type="hidden" /><input size="20" id="userfile" name="userfile" type="file" />
                                &nbsp;{sugar_help text=$MOD.LBL_FILE_UPLOAD_WIDGET_HELP}
                            </span>
                        </td>
                        {if $IMPORT_MODULE == "Leads"}
                        <td align="left" scope="row">
                            <span>
                                <select tabindex='4' id='importlocale_charset' name='importlocale_charset'>
                                    <option value="" selected>{$CHOOSE_GROUP}</option>
                                    {foreach from=$LIST_SECURITY_GROUP item=item name=securitygroupmappings}
                                        <option value="{$item->id}">{$item->name}</option>
                                    {/foreach}
                                </select>
                            </span>
                        </td>
                        <td align="left" scope="row">
                            <span>
                                <select tabindex='4' id='importlocale_charset' name='importlocale_charset'>
                                    <option value="" selected>{$CHOOSE_COMPAIGN}</option>
                                    {foreach from=$LIST_CAMPAIGNS item=item name=campaignsmappings}
                                        <option value="{$item->id}">{$item->name}</option>
                                    {/foreach}
                                </select>
                            </span>
                        </td>
                        <td align="left" scope="row">
                            <span>
                                <select tabindex='4' id='importlocale_charset' name='importlocale_charset'>
                                    <option value="volvo" selected>{$CHOOSE_IMPORT_NUMBER}</option>
                                    <option value="saab">Saab</option>
                                    <option value="vw">VW</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </span>
                        </td>
                        <td align="left" scope="row">
                            <input title="{$MOD.LBL_MODULE_NAME}&nbsp;{$MODULENAME}"  class="button" type="submit" name="button"
                            value="{$MOD.LBL_MODULE_NAME}&nbsp;{$MODULENAME}" id="importnow">
                        </td>
                        {/if}
                    </tr>
                    <tr>
                        <td scope="row" colspan="4">
                            <div class="hr">&nbsp;</div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" colspan="4">&nbsp;</td>
                    </tr>
                    {if $IMPORT_MODULE != "Leads"}
                    <tr>
                        <td scope="row" colspan="3">
                            <h3>{$MOD.LBL_IMPORT_TYPE}&nbsp;</h3>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" colspan="3">
                            <input id="import_create" class="radio" type="radio" name="type" value="import"
                                checked="checked" />
                            &nbsp;<label for="type">{$MOD.LBL_IMPORT_BUTTON}</label>
                            &nbsp;{sugar_help text=$MOD.LBL_CREATE_BUTTON_HELP}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" colspan="3">
                            <input id="import_update" class="radio" type="radio" name="type" id="type" value="update" />
                            &nbsp;<label for="type">{$MOD.LBL_UPDATE_BUTTON}</label>
                            &nbsp;{sugar_help text=$MOD.LBL_UPDATE_BUTTON_HELP}
                        </td>
                    </tr>
                    {/if}
                </table>
                <br>
                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                    {foreach from=$custom_mappings item=item name=custommappings}
                        {capture assign=mapping_label}{$MOD.LBL_CUSTOM_MAPPING_}{$item|upper}{/capture}
                        <tr>
                            <td colspan="3" scope="row"><input class="radio" type="radio" id="source" name="source"
                                    value="{$item}" />
                                &nbsp;<label for="source">{$mapping_label}</label></td>
                        </tr>
                    {/foreach}

                    {if !empty($custom_imports) || !empty($published_imports)}
                        <tr>
                            <td scope="row" colspan="3">
                                <h3>{$MOD.LBL_PUBLISHED_SOURCES}&nbsp;{sugar_help text=$savedMappingHelpText}</h3>
                            </td>
                        </tr>

                        <tr id="custom_import_{$smarty.foreach.saved.index}">
                            <td scope="row" colspan="4">
                                <input class="radio" type="radio" name="source" value="" />
                                &nbsp;{$MOD.LBL_NONE}
                            </td>

                        </tr>
                    {/if}
                    {foreach from=$custom_imports key=key item=item name=saved}
                        <tr id="custom_import_{$smarty.foreach.saved.index}">
                            <td scope="row" colspan="2" width="10%" style="padding-right: 10px;">
                                <input class="radio" type="radio" name="source" value="custom:{$item.IMPORT_ID}" />
                                &nbsp;{$item.IMPORT_NAME}
                            </td>
                            <td scope="row">
                                {if $is_admin}
                                    <input type="button" name="publish" value="{$MOD.LBL_PUBLISH}" class="button" publish="yes"
                                        onclick="publishMapping(this, 'yes','{$item.IMPORT_ID}', '{$IMPORT_MODULE}');">
                                {/if}
                                <input type="button" name="delete" value="{$MOD.LBL_DELETE}" class="button"
                                    onclick="if(confirm('{$MOD.LBL_DELETE_MAP_CONFIRMATION}')){literal}{{/literal} deleteMapping('custom_import_{$smarty.foreach.saved.index}', '{$item.IMPORT_ID}' );{literal}}{/literal}">
                            </td>
                        </tr>
                    {/foreach}

                    {foreach from=$published_imports key=key item=item name=published}
                        <tr id="published_import_{$smarty.foreach.published.index}">
                            <td scope="row" colspan="2">
                                <input class="radio" type="radio" name="source" value="custom:{$item.IMPORT_ID}" />
                                &nbsp;{$item.IMPORT_NAME}
                            </td>
                            <td scope="row">
                                {if $is_admin}
                                    <input type="button" name="publish" value="{$MOD.LBL_UNPUBLISH}" class="button" publish="no"
                                        onclick="publishMapping(this, 'no','{$item.IMPORT_ID}', '{$IMPORT_MODULE}');">
                                    <input type="button" name="delete" value="{$MOD.LBL_DELETE}" class="button"
                                        onclick="if(confirm('{$MOD.LBL_DELETE_MAP_CONFIRMATION}')){literal}{{/literal}deleteMapping('published_import_{$smarty.foreach.published.index}','{$item.IMPORT_ID}' );{literal}}{/literal}">
                                {/if}
                            </td>
                        </tr>
                    {/foreach}
                </table>
            </td>
        </tr>
    </table>

    <br>

    {if $IMPORT_MODULE != "Leads"}
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="left">
                {if $displayBackBttn}
                    <input title="{$MOD.LBL_BACK}" class="button" type="submit" name="button" value="  {$MOD.LBL_BACK}  "
                        id="goback">&nbsp;
                {/if}
                <input title="{$MOD.LBL_NEXT}" class="button" type="submit" name="button" value="  {$MOD.LBL_NEXT}  "
                    id="gonext">
            </td>
        </tr>
    </table>
    {/if}
    <script>
        {$JAVASCRIPT}
    </script>
</form>
{else}
    <form enctype="multipart/form-data" name="importstep2" method="POST" action="index.php" id="importstep2">
    <input type="hidden" name="module" value="Import" id="module">
    <input type="hidden" name="custom_delimiter" value="{$CUSTOM_DELIMITER}" id="custom_delimiter">
    <input type="hidden" name="custom_enclosure" value="{$CUSTOM_ENCLOSURE}" id="custom_enclosure">
    <input type="hidden" name="source" value="{$SOURCE}" id="source">
    <input type="hidden" name="source_id" value="{$SOURCE_ID}" id="source_id">
    <input type="hidden" name="post_of_leads" value="post_of_leads" id="post_id">
    <input type="hidden" name="action" value="Confirm" id="action">
    <input type="hidden" name="current_step" value="{$CURRENT_STEP}" id="current_step">
    <input type="hidden" name="import_module" value="{$IMPORT_MODULE}" id="import_module">
    <input type="hidden" name="from_admin_wizard" value="{$smarty.request.from_admin_wizard}" id="from_admin_wizard">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                    {if $IMPORT_MODULE != "Leads"}
                        <tr>
                            <td align="left" scope="row" colspan="4" style="padding-left: 10px;">{$SAMPLE_URL}
                                &nbsp;{sugar_help text=$MOD.LBL_SAMPLE_URL_HELP}</td>
                        </tr>
                    {/if}
                    <tr>
                        <td scope="row" colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td scope="row" colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="left" scope="row" class="col-4">
                            <span>
                                <label for="userfile">
                                    {$MOD.LBL_SELECT_FILE}
                                    {if $IMPORT_MODULE == "Leads"} 
                                    {$SAMPLE_URL} 
                                    {/if}
                                </label>
                                <input type="hidden" /><input size="20" id="userfile" name="userfile" type="file" />
                                &nbsp;{sugar_help text=$MOD.LBL_FILE_UPLOAD_WIDGET_HELP}
                            </span>
                        </td>
                        {if $IMPORT_MODULE == "Leads"}
                        {* <td align="left" scope="row" class="col-4">
                            <span>
                                <select tabindex='4' id='import_group_security' name='import_group_security'>
                                    <option value="" selected>{$CHOOSE_GROUP}</option>
                                    {foreach from=$LIST_SECURITY_GROUP item=item name=securitygroupmappings}
                                        <option value="{$item->id}">{$item->name}</option>
                                    {/foreach}
                                </select>
                            </span>
                        </td> *}
                        <td align="left" scope="row" class="col-6">
                            <span>
                                <select tabindex='4' id='import_campaign' name='import_campaign'>
                                    <option value="" selected>{$CHOOSE_COMPAIGN}</option>
                                    {foreach from=$LIST_CAMPAIGNS item=item name=campaignsmappings}
                                        <option value="{$item->id}">{$item->name}</option>
                                    {/foreach}
                                </select>
                            </span>
                        </td>
                        <td align="left" scope="row">
                            <input title="{$MOD.LBL_MODULE_NAME}&nbsp;{$MODULENAME}"  class="button" type="submit" name="button"
                            value="{$MOD.LBL_MODULE_NAME}&nbsp;{$MODULENAME}" id="importnow">
                        </td>
                        {/if}
                    </tr>
                    <tr>
                        <td scope="row" colspan="4">
                            <div class="hr">&nbsp;</div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" colspan="4">&nbsp;</td>
                    </tr>
                    {if $IMPORT_MODULE != "Leads"}
                    <tr>
                        <td scope="row" colspan="3">
                            <h3>{$MOD.LBL_IMPORT_TYPE}&nbsp;</h3>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" colspan="3">
                            <input id="import_create" class="radio" type="radio" name="type" value="import"
                                checked="checked" />
                            &nbsp;<label for="type">{$MOD.LBL_IMPORT_BUTTON}</label>
                            &nbsp;{sugar_help text=$MOD.LBL_CREATE_BUTTON_HELP}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" colspan="3">
                            <input id="import_update" class="radio" type="radio" name="type" id="type" value="update" />
                            &nbsp;<label for="type">{$MOD.LBL_UPDATE_BUTTON}</label>
                            &nbsp;{sugar_help text=$MOD.LBL_UPDATE_BUTTON_HELP}
                        </td>
                    </tr>
                    {/if}
                </table>
                <br>
                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                    {foreach from=$custom_mappings item=item name=custommappings}
                        {capture assign=mapping_label}{$MOD.LBL_CUSTOM_MAPPING_}{$item|upper}{/capture}
                        <tr>
                            <td colspan="3" scope="row"><input class="radio" type="radio" id="source" name="source"
                                    value="{$item}" />
                                &nbsp;<label for="source">{$mapping_label}</label></td>
                        </tr>
                    {/foreach}

                    {if !empty($custom_imports) || !empty($published_imports)}
                        <tr>
                            <td scope="row" colspan="3">
                                <h3>{$MOD.LBL_PUBLISHED_SOURCES}&nbsp;{sugar_help text=$savedMappingHelpText}</h3>
                            </td>
                        </tr>

                        <tr id="custom_import_{$smarty.foreach.saved.index}">
                            <td scope="row" colspan="4">
                                <input class="radio" type="radio" name="source" value="" />
                                &nbsp;{$MOD.LBL_NONE}
                            </td>

                        </tr>
                    {/if}
                    {foreach from=$custom_imports key=key item=item name=saved}
                        <tr id="custom_import_{$smarty.foreach.saved.index}">
                            <td scope="row" colspan="2" width="10%" style="padding-right: 10px;">
                                <input class="radio" type="radio" name="source" value="custom:{$item.IMPORT_ID}" />
                                &nbsp;{$item.IMPORT_NAME}
                            </td>
                            <td scope="row">
                                {if $is_admin}
                                    <input type="button" name="publish" value="{$MOD.LBL_PUBLISH}" class="button" publish="yes"
                                        onclick="publishMapping(this, 'yes','{$item.IMPORT_ID}', '{$IMPORT_MODULE}');">
                                {/if}
                                <input type="button" name="delete" value="{$MOD.LBL_DELETE}" class="button"
                                    onclick="if(confirm('{$MOD.LBL_DELETE_MAP_CONFIRMATION}')){literal}{{/literal} deleteMapping('custom_import_{$smarty.foreach.saved.index}', '{$item.IMPORT_ID}' );{literal}}{/literal}">
                            </td>
                        </tr>
                    {/foreach}

                    {foreach from=$published_imports key=key item=item name=published}
                        <tr id="published_import_{$smarty.foreach.published.index}">
                            <td scope="row" colspan="2">
                                <input class="radio" type="radio" name="source" value="custom:{$item.IMPORT_ID}" />
                                &nbsp;{$item.IMPORT_NAME}
                            </td>
                            <td scope="row">
                                {if $is_admin}
                                    <input type="button" name="publish" value="{$MOD.LBL_UNPUBLISH}" class="button" publish="no"
                                        onclick="publishMapping(this, 'no','{$item.IMPORT_ID}', '{$IMPORT_MODULE}');">
                                    <input type="button" name="delete" value="{$MOD.LBL_DELETE}" class="button"
                                        onclick="if(confirm('{$MOD.LBL_DELETE_MAP_CONFIRMATION}')){literal}{{/literal}deleteMapping('published_import_{$smarty.foreach.published.index}','{$item.IMPORT_ID}' );{literal}}{/literal}">
                                {/if}
                            </td>
                        </tr>
                    {/foreach}
                </table>
            </td>
        </tr>
    </table>

    <br>

    {if $IMPORT_MODULE != "Leads"}
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="left">
                {if $displayBackBttn}
                    <input title="{$MOD.LBL_BACK}" class="button" type="submit" name="button" value="  {$MOD.LBL_BACK}  "
                        id="goback">&nbsp;
                {/if}
                <input title="{$MOD.LBL_NEXT}" class="button" type="submit" name="button" value="  {$MOD.LBL_NEXT}  "
                    id="gonext">
            </td>
        </tr>
    </table>
    {/if}
    <script>
        {$JAVASCRIPT}
    </script>
</form>
{if $CHECK_RESULT == true}
<p id="result">{$RESULT}</p>
{/if}
<table class="table" id="show-history-import">
    <thead id="thead-show-history-import">
        <tr>
            <th scope="col">{$THREAD_1}</th>
            <th scope="col">{$THREAD_2}</th>
            <th scope="col">{$THREAD_3}</th>
            <th scope="col">{$THREAD_4}</th>
        </tr>
    </thead>
    <tbody>
        {$ROW_TABLE}
    </tbody>
</table>
{/if}
