<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/MVC/View/SugarView.php');

class CustomLeadsViewdivide_leads extends SugarView
{

    public function handleGetUserChild($parent_id, $list_child)
    {
        //echo "Enter {$parent_id}";
        $query_security_group = "SELECT * FROM securitygroups WHERE assigned_user_id = '{$parent_id}'";
        $result_security_group = $GLOBALS['db']->query($query_security_group);
        $list_child[] = $parent_id;
        while ($rows = $GLOBALS['db']->fetchByAssoc($result_security_group)) {
            //$GLOBALS['log']->fatal("Child group");
            $id = $rows['id'];

            $query_user_in_group = "SELECT user_id FROM securitygroups_users WHERE securitygroup_id = '{$id}'";
            $result_query_user_in_group = $GLOBALS['db']->query($query_user_in_group);
            while ($rows_1 = $GLOBALS['db']->fetchByAssoc($result_query_user_in_group)) {
                $child_id = $rows_1['user_id'];
                $list_child = $this->handleGetUserChild($child_id, $list_child);
            }
        }
        return $list_child;
    }

    public function display()
    {
        global $mod_strings, $current_user;
        $user = BeanFactory::getBean('Users', $current_user->id);
        $html_row_table = "";
        if ($_REQUEST['access_override'] == '90') {
            $query_campaigns = "SELECT id, name, status, start_date, end_date 
                                FROM campaigns 
                                WHERE deleted = 0
                                ORDER BY date_entered DESC";
            $result_campaigns = $GLOBALS['db']->query($query_campaigns);
            $idx = 0;
            while ($row = $GLOBALS['db']->fetchByAssoc($result_campaigns)) {
                $idx += 1;
                $name = $row['name'];
                $status = $row['status'];
                $start_day = $row['start_date'];
                $end_day = $row['end_date'];
                $btn = $mod_strings['LBL_BUTTON_ACT'];
                $id = $row['id'];

                # Query for count leads of campaigns
                $query_leads = "SELECT COUNT(*) AS count_leads FROM leads WHERE campaign_id = '{$id}' AND deleted = 0";
                $result_leads = $GLOBALS['db']->query($query_leads);
                $count_leads = $GLOBALS['db']->fetchByAssoc($result_leads);
                $count_lead = $count_leads['count_leads'];

                # Query for count lead called of campaigns
                $query_not_call_leads = "SELECT COUNT(*) AS count_not_call_leads 
                                            FROM leads 
                                            WHERE campaign_id = '{$id}' AND deleted = 0
                                            AND ((call_status_lead = '1' AND call_status_description_lead = '') OR (call_status_lead = '1' AND call_status_description_lead IS NULL) OR call_status_lead = '' OR call_status_lead IS NULL)";
                $result_not_call_leads = $GLOBALS['db']->query($query_not_call_leads);
                $count_not_call_leads = $GLOBALS['db']->fetchByAssoc($result_not_call_leads);
                $count_not_call_lead = $count_not_call_leads['count_not_call_leads'];
                //echo 10;
                $GLOBALS['log']->fatal($count_not_call_lead);

                # Query for count lead called of campaigns
                $count_called_lead = $count_lead - $count_not_call_lead;

                # Query for count lead not assign
                $query_not_assign_leads = "SELECT COUNT(*) AS count_not_assign_leads FROM leads WHERE campaign_id = '{$id}' AND deleted = 0 AND (assigned_user_id IS NULL OR assigned_user_id = '')";
                $result_not_assign_leads = $GLOBALS['db']->query($query_not_assign_leads);
                $count_not_assign_leads = $GLOBALS['db']->fetchByAssoc($result_not_assign_leads);
                $count_not_assign_lead = $count_not_assign_leads['count_not_assign_leads'];

                $html_row_table .= "
                <tr>
                    <th scope='row'>{$idx}</th>
                    <th scope='row'>{$name}</th>
                    <th scope='row'>{$status}</th>
                    <th scope='row'>{$start_day}</th>
                    <th scope='row'>{$end_day}</th>
                    <th scope='row'>
                        <div class='col-lg-6' id='count'>
                            <p>{$mod_strings['LBL_TOTAL']}: {$count_lead}</p>
                        </div>
                        <div class='col-lg-6' id='count_called_lead'>
                            <p>{$mod_strings['LBL_CALLED']}: {$count_called_lead}</p>
                        </div>
                        <div class='col-lg-6' id='count_not_call_lead'>
                            <p>{$mod_strings['LBL_NOT_CALL']}: {$count_not_call_lead}</p>
                        </div>
                        <div class='col-lg-6' id='count_not_assign_lead'>
                            <p>{$mod_strings['LBL_NOT_ASSIGN']}: {$count_not_assign_lead}</p>
                        </div>
                    </th>
                    <th scope='row'>
                        <button type='button' class='btn btn-manage' id='btn-manage' onclick=\"window.location='index.php?module=Leads&action=detail_divide&return_module=Leads&return_action=DetailView&id={$id}'\">{$btn}</button>
                    </th>
                </tr>
            ";
            }
        } else if ($_REQUEST['access_override'] == '96') {
            $id_employee = $user->id;
            $security_id = $_REQUEST['security_id'];
            //echo $id_user;
            $query_campaigns = "SELECT id, name, status, start_date, end_date, date_entered FROM campaigns WHERE ";
            foreach ($this->handleGetUserChild($id_employee, []) as $key => $value) {
                if ($key == 0){
                    $query_campaigns .= "(assigned_user_id = '{$value}'";
                }
                else {
                    $query_campaigns .= " OR assigned_user_id = '{$value}'";
                }
            }
            $query_campaigns .=  ") AND deleted = 0 ORDER BY date_entered DESC";
            $result_campaigns = $GLOBALS['db']->query($query_campaigns);
            $idx = 0;
            while ($row = $GLOBALS['db']->fetchByAssoc($result_campaigns)) {
                $idx += 1;
                $name = $row['name'];
                $status = $row['status'];
                $start_day = $row['start_date'];
                $end_day = $row['end_date'];
                $btn = $mod_strings['LBL_BUTTON_ACT'];
                $id = $row['id'];

                # Query for count leads of campaigns
                $query_leads = "SELECT COUNT(*) AS count_leads FROM leads WHERE campaign_id = '{$id}' AND deleted = 0";
                $result_leads = $GLOBALS['db']->query($query_leads);
                $count_leads = $GLOBALS['db']->fetchByAssoc($result_leads);
                $count_lead = $count_leads['count_leads'];

                # Query for count lead called of campaigns
                $query_not_call_leads = "SELECT COUNT(*) AS count_not_call_leads 
                                                    FROM leads 
                                                    WHERE campaign_id = '{$id}' AND deleted = 0
                                                    AND ((call_status_lead = '1' AND call_status_description_lead = '') OR (call_status_lead = '1' AND call_status_description_lead IS NULL) OR call_status_lead = '' OR call_status_lead IS NULL)";
                $result_not_call_leads = $GLOBALS['db']->query($query_not_call_leads);
                $count_not_call_leads = $GLOBALS['db']->fetchByAssoc($result_not_call_leads);
                $count_not_call_lead = $count_not_call_leads['count_not_call_leads'];

                # Query for count lead called of campaigns
                $count_called_lead = $count_lead - $count_not_call_lead;

                # Query for count lead not assign
                $query_not_assign_leads = "SELECT COUNT(*) AS count_not_assign_leads FROM leads WHERE campaign_id = '{$id}' AND deleted = 0 AND (assigned_user_id IS NULL OR assigned_user_id = '')";
                $result_not_assign_leads = $GLOBALS['db']->query($query_not_assign_leads);
                $count_not_assign_leads = $GLOBALS['db']->fetchByAssoc($result_not_assign_leads);
                $count_not_assign_lead = $count_not_assign_leads['count_not_assign_leads'];

                $html_row_table .= "
                            <tr>
                                <th scope='row'>{$idx}</th>
                                <th scope='row'>{$name}</th>
                                <th scope='row'>{$status}</th>
                                <th scope='row'>{$start_day}</th>
                                <th scope='row'>{$end_day}</th>
                                <th scope='row'>
                                    <div class='col-lg-6' id='count'>
                                        <p>{$mod_strings['LBL_TOTAL']}: {$count_lead}</p>
                                    </div>
                                    <div class='col-lg-6' id='count_called_lead'>
                                        <p>{$mod_strings['LBL_CALLED']}: {$count_called_lead}</p>
                                    </div>
                                    <div class='col-lg-6' id='count_not_call_lead'>
                                        <p>{$mod_strings['LBL_NOT_CALL']}: {$count_not_call_lead}</p>
                                    </div>
                                    <div class='col-lg-6' id='count_not_assign_lead'>
                                        <p>{$mod_strings['LBL_NOT_ASSIGN']}: {$count_not_assign_lead}</p>
                                    </div>
                                </th>
                                <th scope='row'>
                                    <button type='button' class='btn btn-manage' id='btn-manage' onclick=\"window.location='index.php?module=Leads&action=detail_divide&return_module=Leads&return_action=DetailView&id={$id}&security_id={$security_id}'\">{$btn}</button>
                                </th>
                            </tr>
                        ";
            }
        } else if ($_REQUEST['access_override'] == '75') {
            $id_employee = $user->id;
            $security_id = $_REQUEST['security_id'];
            //echo $id_user;
            $query_campaigns = "SELECT id, name, status, start_date, end_date, date_entered FROM campaigns WHERE assigned_user_id = '{$id_employee}' AND deleted = 0 ORDER BY date_entered DESC";
            $result_campaigns = $GLOBALS['db']->query($query_campaigns);
            $idx = 0;
            while ($row = $GLOBALS['db']->fetchByAssoc($result_campaigns)) {
                $idx++;
                $name = $row['name'];
                $status = $row['status'];
                $start_day = $row['start_date'];
                $end_day = $row['end_date'];
                $btn = $mod_strings['LBL_BUTTON_ACT'];
                $id = $row['id'];

                # Query for count leads of campaigns
                $query_leads = "SELECT COUNT(*) AS count_leads FROM leads WHERE campaign_id = '{$id}' AND deleted = 0";
                $result_leads = $GLOBALS['db']->query($query_leads);
                $count_leads = $GLOBALS['db']->fetchByAssoc($result_leads);
                $count_lead = $count_leads['count_leads'];

                # Query for count lead called of campaigns
                $query_not_call_leads = "SELECT COUNT(*) AS count_not_call_leads 
                                                    FROM leads 
                                                    WHERE campaign_id = '{$id}' AND deleted = 0
                                                    AND ((call_status_lead = '1' AND call_status_description_lead = '') OR (call_status_lead = '1' AND call_status_description_lead IS NULL) OR call_status_lead = '' OR call_status_lead IS NULL)";
                $result_not_call_leads = $GLOBALS['db']->query($query_not_call_leads);
                $count_not_call_leads = $GLOBALS['db']->fetchByAssoc($result_not_call_leads);
                $count_not_call_lead = $count_not_call_leads['count_not_call_leads'];

                # Query for count lead called of campaigns
                $count_called_lead = $count_lead - $count_not_call_lead;

                # Query for count lead not assign
                $query_not_assign_leads = "SELECT COUNT(*) AS count_not_assign_leads FROM leads WHERE campaign_id = '{$id}' AND deleted = 0 AND (assigned_user_id IS NULL OR assigned_user_id = '')";
                $result_not_assign_leads = $GLOBALS['db']->query($query_not_assign_leads);
                $count_not_assign_leads = $GLOBALS['db']->fetchByAssoc($result_not_assign_leads);
                $count_not_assign_lead = $count_not_assign_leads['count_not_assign_leads'];

                $html_row_table .= "
                            <tr>
                                <th scope='row'>{$idx}</th>
                                <th scope='row'>{$name}</th>
                                <th scope='row'>{$status}</th>
                                <th scope='row'>{$start_day}</th>
                                <th scope='row'>{$end_day}</th>
                                <th scope='row'>
                                    <div class='col-lg-6' id='count'>
                                        <p>{$mod_strings['LBL_TOTAL']}: {$count_lead}</p>
                                    </div>
                                    <div class='col-lg-6' id='count_called_lead'>
                                        <p>{$mod_strings['LBL_CALLED']}: {$count_called_lead}</p>
                                    </div>
                                    <div class='col-lg-6' id='count_not_call_lead'>
                                        <p>{$mod_strings['LBL_NOT_CALL']}: {$count_not_call_lead}</p>
                                    </div>
                                    <div class='col-lg-6' id='count_not_assign_lead'>
                                        <p>{$mod_strings['LBL_NOT_ASSIGN']}: {$count_not_assign_lead}</p>
                                    </div>
                                </th>
                                <th scope='row'>
                                    <button type='button' class='btn btn-manage' id='btn-manage' onclick=\"window.location='index.php?module=Leads&action=detail_divide&return_module=Leads&return_action=DetailView&id={$id}&security_id={$security_id}'\">{$btn}</button>
                                </th>
                            </tr>
                        ";
            }
        }



        $smarty = new Sugar_Smarty();
        $smarty->assign('DIVIDE', $mod_strings['LNK_DIVIDE']);
        $smarty->assign('STT', $mod_strings['LBL_STT']);
        $smarty->assign('CAMPAIGN', $mod_strings['LBL_CAMPAIGNS']);
        $smarty->assign('STATUS_CAMPAIGN', $mod_strings['LBL_STATUS_CAMPAIGN']);
        $smarty->assign('START_DAY', $mod_strings['LBL_START_DAY']);
        $smarty->assign('END_DAY', $mod_strings['LBL_END_DAY']);
        $smarty->assign('STATUS_DATA', $mod_strings['LBL_STATUS_DATA']);
        $smarty->assign('ACT', $mod_strings['LBL_ACT']);
        $smarty->assign('DATA', $html_row_table);

        parent::display();
        $smarty->display('custom/modules/Leads/tpls/divide_leads.tpl');
    }
}
