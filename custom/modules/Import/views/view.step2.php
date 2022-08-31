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

/**

 * Description: view handler for step 2 of the import process
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 */

require_once('modules/Import/views/ImportView.php');
if ($_REQUEST['import_module'] == "Leads") {
    require_once('modules/Import/sources/ImportFile.php');
    require_once('modules/Import/ImportFileSplitter.php');
    require_once('modules/Import/CsvAutoDetect.php'); 
    require_once('include/upload_file.php');
}

date_default_timezone_set('Asia/Ho_Chi_Minh');


class ImportViewStep2 extends ImportView
{
    protected $pageTitleKey = 'LBL_STEP_2_TITLE';
    protected $errorScript = "";
    const SAMPLE_ROW_SIZE = 3;

    /**
     * @see SugarView::display()
     */
    public function display()
    {
        global $mod_strings, $app_list_strings, $app_strings, $current_user, $import_bean_map, $import_mod_strings;
        global $sugar_config, $locale;
        $check_imprort = false;
        $security_groupBean = BeanFactory::getBean('SecurityGroups');
        $campaignsBean = BeanFactory::getBean('Campaigns');
        $list_security_group = $security_groupBean->get_full_list();
        $list_campaigns = $campaignsBean->get_full_list();
        $time_login = date('Y-m-d H:i:s');
        $date_login =  explode(" ",$time_login)[0];


        if ($_REQUEST['import_module'] == "Leads") {
            $title_leads = $mod_strings['LBL_LEADS_TITLE'];
            $intruction_leads_1 = $mod_strings['LBL_INTRODUCTION_LEADS_1'];
            $intruction_leads_2 = $mod_strings['LBL_INTRODUCTION_LEADS_2'];
            $intruction_leads_3 = $mod_strings['LBL_INTRODUCTION_LEADS_3'];
            $intruction_leads_4 = $mod_strings['LBL_INTRODUCTION_LEADS_4'];
            $choose_group_security = $mod_strings['LBL_CHOOSE_GROUP_SECURITY'];
            $choose_campaign = $mod_strings['LBL_CHOOSE_COMPAIGNS'];
            $choose_import_number = $mod_strings['LBL_CHOOSE_IMPORT_NUMBER'];
            $this->ss->assign('LIST_SECURITY_GROUP', $list_security_group);
            $this->ss->assign('LIST_CAMPAIGNS', $list_campaigns);
            $this->ss->assign("MODULE_TITLE", "<h2 class='module-title-text'>$title_leads</h2>");
            $this->ss->assign("CHOOSE_GROUP", $choose_group_security);
            $this->ss->assign('CHOOSE_COMPAIGN', $choose_campaign);
            $this->ss->assign('CHOOSE_IMPORT_NUMBER', $choose_import_number);
            $this->ss->assign(
                'INSTRUCTION', 
                '
                <div class="import_instruction">
                    <p style="color:#F44D4D;font-size: 15px;">' . $intruction_leads_1 . 
                    '<span style="color:#FB0808;font-size: 15px;font-weight: bold;">' . $intruction_leads_2 . '</span></p>
                </div>
                <div class="import_instruction">
                    <p style="color:#F44D4D;font-size: 15px;">' . $intruction_leads_3 . 
                    '<span style="color:#FB0808;font-size: 15px;font-weight: bold;">' . $intruction_leads_4 . '</span></p>
                </div>
                '
            );
        }
        else {
            $this->ss->assign("MODULE_TITLE", $this->getModuleTitle(false));
            $this->instruction = 'LBL_SELECT_UPLOAD_INSTRUCTION';
            $this->ss->assign('INSTRUCTION', $this->getInstruction());
        }
        $this->ss->assign("IMP", $import_mod_strings);
        $this->ss->assign("CURRENT_STEP", $this->currentStep);
        $this->ss->assign("TYPE", (!empty($_REQUEST['type']) ? $_REQUEST['type'] : "import"));
        $this->ss->assign("CUSTOM_DELIMITER", (!empty($_REQUEST['custom_delimiter']) ? $_REQUEST['custom_delimiter'] : ","));
        $this->ss->assign("CUSTOM_ENCLOSURE", htmlentities(
            (!empty($_REQUEST['custom_enclosure']) && $_REQUEST['custom_enclosure'] != 'other'
                ? $_REQUEST['custom_enclosure'] :
                (!empty($_REQUEST['custom_enclosure_other'])
                    ? $_REQUEST['custom_enclosure_other'] : ""))
        ));

        $this->ss->assign("IMPORT_MODULE", $_REQUEST['import_module']);
        $this->ss->assign("HEADER", $app_strings['LBL_IMPORT']." ". $mod_strings['LBL_MODULE_NAME']);
        $this->ss->assign("JAVASCRIPT", $this->_getJS());
        $this->ss->assign("SAMPLE_URL", "<a href=\"javascript: void(0);\" onclick=\"window.location.href='index.php?entryPoint=custom_export&module=".urlencode($_REQUEST['import_module'])."&action=index&all=true&sample=true'\" >".$mod_strings['LBL_EXAMPLE_FILE']."</a>");

        $displayBackBttn = isset($_REQUEST['action']) && $_REQUEST['action'] == 'Step2' && isset($_REQUEST['current_step']) && $_REQUEST['current_step']!=='2'? true : false; //bug 51239
        $this->ss->assign("displayBackBttn", $displayBackBttn);

        // get user defined import maps
        $is_admin = is_admin($current_user);
        if ($is_admin) {
            $savedMappingHelpText = $mod_strings['LBL_MY_SAVED_ADMIN_HELP'];
        } else {
            $savedMappingHelpText = $mod_strings['LBL_MY_SAVED_HELP'];
        }

        $this->ss->assign('savedMappingHelpText', $savedMappingHelpText);
        $this->ss->assign('is_admin', $is_admin);

        $import_map_seed = new ImportMap();
        $custom_imports_arr = $import_map_seed->retrieve_all_by_string_fields(array('assigned_user_id' => $current_user->id, 'is_published' => 'no','module' => $_REQUEST['import_module']));

        if (count($custom_imports_arr)) {
            $custom = array();
            foreach ($custom_imports_arr as $import) {
                $custom[] = array( "IMPORT_NAME" => $import->name,"IMPORT_ID"   => $import->id);
            }
            $this->ss->assign('custom_imports', $custom);
        }

        // get globally defined import maps
        $published_imports_arr = $import_map_seed->retrieve_all_by_string_fields(array('is_published' => 'yes', 'module' => $_REQUEST['import_module'],));
        if (count($published_imports_arr)) {
            $published = array();
            foreach ($published_imports_arr as $import) {
                $published[] = array("IMPORT_NAME" => $import->name, "IMPORT_ID"   => $import->id);
            }
            $this->ss->assign('published_imports', $published);
        }
        //End custom mapping

        // add instructions for anything other than custom_delimited
        $instructions = array();
        $lang_key = "CUSTOM";

        for ($i = 1; isset($mod_strings["LBL_{$lang_key}_NUM_$i"]);$i++) {
            $instructions[] = array(
                "STEP_NUM"         => $mod_strings["LBL_NUM_$i"],
                "INSTRUCTION_STEP" => $mod_strings["LBL_{$lang_key}_NUM_$i"],
            );
        }

        if ($_POST && isset($_POST['post_of_leads'])) {
            $sugar_config['import_max_records_per_file'] = (empty($sugar_config['import_max_records_per_file']) ? 1000 : $sugar_config['import_max_records_per_file']);
            $importSource = isset($_REQUEST['source']) ? $_REQUEST['source'] : 'csv';
            $time_import = date('Y-m-d H:i:s');
            $time_file =  explode(" ",date('Y_m_d H_i_s'));
            // Clear out this user's last import
            $seedUsersLastImport = new UsersLastImport();
            $seedUsersLastImport->mark_deleted_by_user_id($current_user->id);
            ImportCacheFiles::clearCacheFiles();

            // handle uploaded file
            $uploadFile = new UploadFile('userfile');
            if (isset($_FILES['userfile']) && $uploadFile->confirm_upload()) {
                $uploadFile->final_move('IMPORT_' . $this->bean->object_name . '_' . $current_user->id . '_' . $time_file[0] . '_' . $time_file[1] . '.csv');
                $uploadFileName = $uploadFile->get_upload_path('IMPORT_' . $this->bean->object_name . '_' . $current_user->id . '_' . $time_file[0] . '_' . $time_file[1] . '.csv');
            } elseif (!empty($_REQUEST['tmp_file'])) {
                $uploadFileName = "upload://" . basename($_REQUEST['tmp_file']);
            } else {
                $this->_showImportError($mod_strings['LBL_IMPORT_MODULE_ERROR_NO_UPLOAD'], $_REQUEST['import_module'], 'Step2', true, null, true);
                return;
            }

            //check the file size, we dont want to process an empty file
            if (isset($_FILES['userfile']['size']) && $_FILES['userfile']['size'] == 0) {
                //this file is empty, throw error message
                $this->_showImportError($mod_strings['LBL_NO_LINES'], $_REQUEST['import_module'], 'Step2', false, null, true);
                return;
            }

            $mimeTypeOk = true;

            //check to see if the file mime type is not a form of text or application octed streramand fire error if not
            if (isset($_FILES['userfile']['type']) && strpos($_FILES['userfile']['type'], 'octet-stream') === false && strpos($_FILES['userfile']['type'], 'text') === false
                && strpos($_FILES['userfile']['type'], 'application/vnd.ms-excel') === false) {
                //this file does not have a known text or application type of mime type, issue the warning
                $error_msgs[] = $mod_strings['LBL_MIME_TYPE_ERROR_1'];
                $error_msgs[] = $mod_strings['LBL_MIME_TYPE_ERROR_2'];
                $this->_showImportError($error_msgs, $_REQUEST['import_module'], 'Step2', true, $mod_strings['LBL_OK']);
                $mimeTypeOk = false;
            }

            $this->ss->assign("FILE_NAME", $uploadFileName);

            // Now parse the file and look for errors
            $importFile = new ImportFile($uploadFileName, $_REQUEST['custom_delimiter'], html_entity_decode($_REQUEST['custom_enclosure'], ENT_QUOTES), false);
            if ($this->shouldAutoDetectProperties($importSource)) {
                $GLOBALS['log']->debug("Auto detecing csv properties...");
                $autoDetectOk = $importFile->autoDetectCSVProperties();
                $importFileMap = array();
                $this->ss->assign("SOURCE", 'csv');
                if ($autoDetectOk === false) {
                    //show error only if previous mime type check has passed
                    if ($mimeTypeOk) {
                        $this->ss->assign("AUTO_DETECT_ERROR", $mod_strings['LBL_AUTO_DETECT_ERROR']);
                    }
                } else {
                    $dateFormat = $importFile->getDateFormat();
                    $timeFormat = $importFile->getTimeFormat();
                    if ($dateFormat) {
                        $importFileMap['importlocale_dateformat'] = $dateFormat;
                    }
                    if ($timeFormat) {
                        $importFileMap['importlocale_timeformat'] = $timeFormat;
                    }
                }
            } else {
                $impotMapSeed = $this->getImportMap($importSource);
                $importFile->setImportFileMap($impotMapSeed);
                $importFileMap = $impotMapSeed->getMapping($_REQUEST['import_module']);
            }
    
            $delimeter = $importFile->getFieldDelimeter();
            $enclosure = $importFile->getFieldEnclosure();
            $hasHeader = $importFile->hasHeaderRow();
    
            $encodeOutput = true;
            //Handle users navigating back through the wizard.
            if (!empty($_REQUEST['previous_action']) && $_REQUEST['previous_action'] == 'Confirm') {
                $encodeOutput = false;
                $importFileMap = $this->overloadImportFileMapFromRequest($importFileMap);
                $delimeter = !empty($_REQUEST['custom_delimiter']) ? $_REQUEST['custom_delimiter'] : $delimeter;
                $enclosure = isset($_REQUEST['custom_enclosure']) ? $_REQUEST['custom_enclosure'] : $enclosure;
                $enclosure = html_entity_decode($enclosure, ENT_QUOTES);
                $hasHeader = !empty($_REQUEST['has_header']) ? $_REQUEST['has_header'] : $hasHeader;
                if ($hasHeader == 'on') {
                    $hasHeader = true;
                } elseif ($hasHeader == 'off') {
                    $hasHeader = false;
                }
            }

            $this->ss->assign("IMPORT_ENCLOSURE_OPTIONS", $this->getEnclosureOptions($enclosure));
            $this->ss->assign("IMPORT_DELIMETER_OPTIONS", $this->getDelimeterOptions($delimeter));
            $this->ss->assign("CUSTOM_DELIMITER", $delimeter);
            $this->ss->assign("CUSTOM_ENCLOSURE", htmlentities($enclosure, ENT_QUOTES));
            $hasHeaderFlag = $hasHeader ? " CHECKED" : "";
            $this->ss->assign("HAS_HEADER_CHECKED", $hasHeaderFlag);

            if (!$importFile->fileExists()) {
                $this->_showImportError($mod_strings['LBL_CANNOT_OPEN'], $_REQUEST['import_module'], 'Step2', false, null, true);
                return;
            }

            //Check if we will exceed the maximum number of records allowed per import.
            $maxRecordsExceeded = false;
            $maxRecordsWarningMessg = "";
            $lineCount = $importFile->getNumberOfLinesInfile();
            $maxLineCount = isset($sugar_config['import_max_records_total_limit']) ? $sugar_config['import_max_records_total_limit'] : 5000;
            if (!empty($maxLineCount) && ($lineCount > $maxLineCount)) {
                $maxRecordsExceeded = true;
                $maxRecordsWarningMessg = string_format($mod_strings['LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED'], array($lineCount, $maxLineCount));
            }

            //Retrieve a sample set of data
            $rows = $this->getSampleSet($importFile, $lineCount);

            $count = count($rows);

            //echo $count;

            #Handle import element for module Leads
            array_shift($rows);
            #array_pop($rows);
            foreach ($rows as $key => $value) {
                $leadBean = BeanFactory::newBean('Leads');
                $security_code = $value[0];
                $first_name = $value[1];
                $card_id = $value[2];
                $phone_mobile = $value[3];
                $phone_home = $value[4];
                $birthdate = $value[5];
                $primary_address_street = $value[6];
                $assigned_user_name = $value[7];
                $card_bank = $value[8];
                $card_amount = $value[9];
                $card_rest = $value[10];
                $interest_rate = $value[11];
                $index = $key + 1;

                if($_POST['import_campaign'] == ""){
                    $message = $mod_strings['LBL_CANNOT_FIND_CAMPAIGN'];
                    $this->_showImportError($message, $_REQUEST['import_module'], 'Step2', false, null, true);
                    return;
                }

                if ($phone_mobile == ""){
                    $message = $mod_strings['LBL_CANNOT_FIND_PHONE_MOBILE'] . $index ;
                    $this->_showImportError($message, $_REQUEST['import_module'], 'Step2', false, null, true);
                    return;
                }

                if ($assigned_user_name != ""){
                    $query = "SELECT id  FROM users WHERE user_name = '{$assigned_user_name}' AND deleted = 0";
                    $result = $GLOBALS['db']->query($query);
                    $id_user = $GLOBALS['db']->fetchByAssoc($result);
                    if ($id_user['id'] == ""){
                        $message = $mod_strings['LBL_CANNOT_FIND_USER_ASSIGN'] . $index;
                        $this->_showImportError($message, $_REQUEST['import_module'], 'Step2', false, null, true);
                        return;
                    }
                    #echo "id cua chien dich " . $id_campaign['id'];
                }
            }

            foreach ($rows as $key => $value) {
                $leadBean = BeanFactory::newBean('Leads');
                $security_code = $value[0];
                $first_name = $value[1];
                $card_id = $value[2];
                $phone_mobile = $value[3];
                $phone_home = $value[4];
                $birthdate = $value[5];
                $primary_address_street = $value[6];
                $assigned_user_name = $value[7];
                $card_bank = $value[8];
                $card_amount = $value[9];
                $card_rest = $value[10];
                $interest_rate = $value[11];
                
                $leadBean->campaign_id = $_POST['import_campaign'];

                if ($assigned_user_name != ""){
                    $query = "SELECT id  FROM users WHERE user_name = '{$assigned_user_name}' AND deleted = 0";
                    $result = $GLOBALS['db']->query($query);
                    $id_user = $GLOBALS['db']->fetchByAssoc($result);
                    $leadBean->assigned_user_id = $id_user['id'];
                    #echo "id cua chien dich " . $id_campaign['id'];
                }
                
                $leadBean->security_code = $security_code;
                $leadBean->first_name = $first_name;
                $leadBean->card_id = $card_id;
                $leadBean->phone_mobile = $phone_mobile;
                $leadBean->phone_home = $phone_home;
                $leadBean->birthdate = $birthdate;
                $leadBean->primary_address_street = $primary_address_street;
                $leadBean->card_bank = $card_bank;
                $leadBean->card_amount = $card_amount;
                $leadBean->card_rest = $card_rest;
                $leadBean->interest_rate = $interest_rate;
                $leadBean->call_status_lead = '';
                $leadBean->call_status_description_lead = '';
                $leadBean->save();
            }

            $check_imprort = true;

            $this->ss->assign('RESULT', $mod_strings['LBL_IMPORT_COMPLETED']);


            global $sugar_config;
            $siteUrl = $sugar_config['url_web'];
            $link_url_file = $siteUrl . '/upload/' . 'IMPORT_' . $this->bean->object_name . '_' . $current_user->id . '_' . $time_file[0] . '_' . $time_file[1]  . '.csv';
            $time_post =  explode(" ",$time_import)[0];
            global $current_user;
            $name_user = $current_user->last_name;
            $id_user_updated = $current_user->id;
            if ($date_login != $time_post) {
                $query_insert_import_leads = "INSERT INTO import_leads (date_updated,  date_post, user_updated, id_user_updated,  link_file, number_import_in_day) VALUES ('{$time_import}', '{$time_post}', {$name_user}', '{$id_user_updated}','{$link_url_file}', 1);";
                $GLOBALS['db']->query($query_insert_import_leads); 
            }
            else {
                $query_1 = "SELECT COUNT(*) AS total  FROM import_leads WHERE date_post = '{$date_login}' AND id_user_updated = '{$id_user_updated}'";
                $result_1 = $GLOBALS['db']->query($query_1);
                $row_1 = $GLOBALS['db']->fetchByAssoc($result_1);
                $total_1 = $row_1['total'] +1;
                $query_insert_import_leads = "INSERT INTO import_leads (date_updated, date_post, user_updated, id_user_updated, link_file, number_import_in_day)  VALUES ('{$time_import}', '{$time_post}', '{$name_user}', '{$id_user_updated}', '{$link_url_file}','{$total_1}');";
                $GLOBALS['db']->query($query_insert_import_leads); 
            }  

        }
        $time_now = date('Y-m-d H:i:s');
        $date_now =  explode(" ",$time_now)[0];
        global $current_user;
        $id_user_x = $current_user->id;
        $query_import_lead = "SELECT *  FROM import_leads WHERE date_post = '{$date_now}' AND id_user_updated = '{$id_user_x}'";
        $result_import_lead = $GLOBALS['db']->query($query_import_lead);
        $html_row_table = "";
        while($row = $GLOBALS['db']->fetchByAssoc($result_import_lead))
        {
            //Use $row['id'] to grab the id fields value
            $id = $row['id'];
            $number_import_in_day = $row['number_import_in_day'];
            $date_updated = $row['date_updated'];
            $user_updated = $row['user_updated'];
            $link_file = $row['link_file'];
            $html_row_table .= "
                <tr>
                    <th scope='row'>{$user_updated}</th>
                    <th scope='row'>{$date_updated}</th>
                    <th scope='row'><a href=\"javascript: void(0);\" onclick=\"window.location.href='{$link_file}'\" target=\"_blank\" rel=\"noopener noreferrer\">{$link_file}</a></th>
                    <th scope='row'>{$number_import_in_day}</th>
                </tr>
            ";
        }
        
        $this->ss->assign('CHECK_RESULT', $check_imprort);
        $this->ss->assign('THREAD_1', $mod_strings['LBL_USER_UPDATED_LEAD']);
        $this->ss->assign('THREAD_2', $mod_strings['LBL_DATE_UPDATE_LEAD']);
        $this->ss->assign('THREAD_3', $mod_strings['LBL_LINK_FILE']);
        $this->ss->assign('THREAD_4', $mod_strings['LBL_NUMBER_IMPORT_LEAD']);
        $this->ss->assign('ROW_TABLE', $html_row_table);

        $this->ss->assign("instructions", $instructions);

        $content = $this->ss->fetch('modules/Import/tpls/step2.tpl');
        $this->ss->assign("CONTENT", $content);
        $this->ss->display('modules/Import/tpls/wizardWrapper.tpl');
    }

    protected function getImportMappingJS()
    {
        $results = array();
        $importMappings = array('ImportMapSalesforce', 'ImportMapOutlook');
        foreach ($importMappings as $importMap) {
            $tmpFile = "modules/Import/maps/$importMap.php";
            if (file_exists($tmpFile)) {
                require_once($tmpFile);
                $t = new $importMap();
                $results[$t->name] = array('delim' => $t->delimiter, 'enclos' => $t->enclosure, 'has_header' => $t->has_header);
            }
        }
        return $results;
    }

    private function getDelimeterOptions($selctedDelim)
    {
        $selctedDelim = $selctedDelim == "\t" ? '\t' : $selctedDelim;
        return get_select_options_with_id($GLOBALS['app_list_strings']['import_delimeter_options'], $selctedDelim);
    }

    private function getEnclosureOptions($enclosure)
    {
        $results = array();
        foreach ($GLOBALS['app_list_strings']['import_enclosure_options'] as $k => $v) {
            $results[htmlentities($k, ENT_QUOTES)] = $v;
        }

        return get_select_options_with_id($results, htmlentities($enclosure, ENT_QUOTES));
    }

    public function getMaxColumnsInSampleSet($sampleSet)
    {
        $maxColumns = 0;
        foreach ($sampleSet as $v) {
            if (count($v) > $maxColumns) {
                $maxColumns = count($v);
            } else {
                continue;
            }
        }

        return $maxColumns;
    }

    public function getSampleSet($importFile, $lineCount)
    {
        $rows = array();
        for ($i=0; $i < $lineCount; $i++) {
            $rows[] = $importFile->getNextRow();
        }

        if (! $importFile->hasHeaderRow(false)) {
            array_unshift($rows, array_fill(0, 1, ''));
        }
        
        foreach ($rows as &$row) {
            if (is_array($row)) {
                foreach ($row as &$val) {
                    $val = strip_tags($val);
                }
            }
        }
        return $rows;
    }

    private function overloadImportFileMapFromRequest($importFileMap)
    {
        $overideKeys = array(
            'importlocale_dateformat','importlocale_timeformat','importlocale_timezone','importlocale_charset',
            'importlocale_currency','importlocale_default_currency_significant_digits','importlocale_num_grp_sep',
            'importlocale_dec_sep','importlocale_default_locale_name_format','custom_delimiter', 'custom_enclosure'
        );

        foreach ($overideKeys as $key) {
            if (!empty($_REQUEST[$key])) {
                $importFileMap[$key] = $_REQUEST[$key];
            }
        }
        return $importFileMap;
    }

    private function shouldAutoDetectProperties($importSource)
    {
        if (empty($importSource) || $importSource == 'csv') {
            return true;
        }
        return false;
    }

    /**
     * Returns JS used in this view
     */
    private function _getJS()
    {
        global $mod_strings;

        return <<<EOJAVASCRIPT

if( document.getElementById('goback') )
{
    document.getElementById('goback').onclick = function()
    {
        document.getElementById('importstep2').action.value = 'Step1';
        return true;
    }
}

if (document.getElementById('gonext')){

    document.getElementById('gonext').onclick = function(){
        // warning message that tells user that updates can not be undone
        if(document.getElementById('import_update').checked)
        {
            ret = confirm(SUGAR.language.get("Import", 'LBL_CONFIRM_IMPORT'));
            if (!ret) {
                return false;
            }
        }
        clear_all_errors();
        var isError = false;
        // be sure we specify a file to upload
        if (document.getElementById('importstep2').userfile.value == "") {
            add_error_style(document.getElementById('importstep2').name,'userfile',"{$mod_strings['ERR_MISSING_REQUIRED_FIELDS']} {$mod_strings['ERR_SELECT_FILE']}");
            isError = true;
        }
        return !isError;

    }
}

if (document.getElementById('importnow')){
    document.getElementById('importnow').onclick = function(event){
        clear_all_errors();
        var isError = false;
        // be sure we specify a file to upload
        if (document.getElementById('importstep2').userfile.value == "") {
            add_error_style(document.getElementById('importstep2').name,'userfile',"{$mod_strings['ERR_MISSING_REQUIRED_FIELDS']} {$mod_strings['ERR_SELECT_FILE']}");
            isError = true;
        }
        document.getElementById('importstep2').action.value = 'Step2';
        return !isError;
    }
}


function publishMapping(elem, publish, mappingId, importModule)
{
    if( typeof(elem.publish) != 'undefined' )
        publish = elem.publish;

    var url = 'index.php?action=mapping&module=Import&publish=' + publish + '&import_map_id=' + mappingId + '&import_module=' + importModule;
    var callback = {
                        success: function(o)
                        {
                            var r = YAHOO.lang.JSON.parse(o.responseText);
                            if( r.message != '')
                                alert(r.message);
                        },
                        failure: function(o) {}
                   };
    YAHOO.util.Connect.asyncRequest('GET', url, callback);
    //Toggle the button title
    if(publish == 'yes')
    {
        var newTitle = SUGAR.language.get('Import','LBL_UNPUBLISH');
        var newPublish = 'no';
    }
    else
    {
        var newTitle = SUGAR.language.get('Import','LBL_PUBLISH');
        var newPublish = 'yes';
    }

    elem.value = newTitle;
    elem.publish = newPublish;

}
function deleteMapping(elemId, mappingId )
{
    var elem = document.getElementById(elemId);
    var table = elem.parentNode;
    table.deleteRow(elem.rowIndex);

    var url = 'index.php?action=mapping&module=Import&delete_map_id=' + mappingId;
    var callback = {
                        success: function(o)
                        {
                            var r = YAHOO.lang.JSON.parse(o.responseText);
                            if( r.message != '')
                                alert(r.message);
                        },
                        failure: function(o) {}
                   };
    YAHOO.util.Connect.asyncRequest('GET', url, callback);
}
var deselectEl = document.getElementById('deselect');
if(deselectEl)
{
    deselectEl.onclick = function() {
        var els = document.getElementsByName('source');
        for(i=0;i<els.length;i++)
        {
            els[i].checked = false;
        }
    }
}

EOJAVASCRIPT;
    }

    /**
     * Displays the Smarty template for an error
     *
     * @param string $message error message to show
     * @param string $module what module we were importing into
     * @param string $action what page we should go back to
     */
    protected function _showImportError($message, $module, $action = 'Step1', $showCancel = false, $cancelLabel = null, $display = false)
    {
        if (!is_array($message)) {
            $message = array($message);
        }
        $ss = new Sugar_Smarty();
        $display_msg = '';
        foreach ($message as $m) {
            $display_msg .= '<p>'.htmlentities($m, ENT_QUOTES).'</p><br>';
        }
        global $mod_strings;

        $ss->assign("MESSAGE", $display_msg);
        $ss->assign("ACTION", $action);
        $ss->assign("IMPORT_MODULE", $module);
        $ss->assign("MOD", $GLOBALS['mod_strings']);
        $ss->assign("SOURCE", "");
        $ss->assign("SHOWCANCEL", $showCancel);
        if (isset($_REQUEST['source'])) {
            $ss->assign("SOURCE", $_REQUEST['source']);
        }

        if ($cancelLabel) {
            $ss->assign('CANCELLABEL', $cancelLabel);
        }

        $content = $ss->fetch('modules/Import/tpls/error.tpl');

        echo $ss->fetch('modules/Import/tpls/error.tpl');
    }

    private function getImportMap($importSource)
    {
        if (strncasecmp("custom:", $importSource, 7) == 0) {
            $id = substr($importSource, 7);
            $import_map_seed = new ImportMap();
            $import_map_seed->retrieve($id, false);

            $this->ss->assign("SOURCE_ID", $import_map_seed->id);
            $this->ss->assign("SOURCE_NAME", $import_map_seed->name);
            $this->ss->assign("SOURCE", $import_map_seed->source);
        } else {
            $classname = 'ImportMap' . ucfirst($importSource);
            if (file_exists("modules/Import/maps/{$classname}.php")) {
                require_once("modules/Import/maps/{$classname}.php");
            } elseif (file_exists("custom/modules/Import/maps/{$classname}.php")) {
                require_once("custom/modules/Import/maps/{$classname}.php");
            } else {
                require_once("custom/modules/Import/maps/ImportMapOther.php");
                $classname = 'ImportMapOther';
                $importSource = 'other';
            }
            if (class_exists($classname)) {
                $import_map_seed = new $classname;
                $this->ss->assign("SOURCE", $importSource);
            }
        }

        return $import_map_seed;
    }
}
