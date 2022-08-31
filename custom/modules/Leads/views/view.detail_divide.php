<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/MVC/View/SugarView.php');

class CustomLeadsViewdetail_divide extends SugarView
{


    public function display()
    {
        global $mod_strings, $current_user;
        $smarty = new Sugar_Smarty();
        $html_row_table = "";
        $html_row_table_assigned = "";
        $idx = 0;
        $id_assigned = "";
        $id_quantity_cancel = "";
        $id_modified_date = "";
        $list_employee_string = "";

        $id_campaign = $_REQUEST['id'];
        $query_campaigns = "SELECT name, status, start_date, end_date FROM campaigns WHERE id = '{$id_campaign}' AND deleted = 0";
        $result_campaigns = $GLOBALS['db']->query($query_campaigns);
        $row = $GLOBALS['db']->fetchByAssoc($result_campaigns);
        $name = $row['name'];
        $status = $row['status'];
        $start_day = $row['start_date'];
        $end_day = $row['end_date'];
        $smarty->assign('ID_CAMPAIGN', $id_campaign);
        $smarty->assign('CAMPAIGN_NAME', $name);
        $smarty->assign('STATUS_NAME', $status);
        $smarty->assign('START_NAME_VALUE', $start_day);
        $smarty->assign('END_NAME_VALUE', $end_day);

        # Query for count leads of campaigns
        $query_leads = "SELECT COUNT(*) AS count_leads FROM leads WHERE campaign_id = '{$id_campaign}' AND deleted = 0";
        $result_leads = $GLOBALS['db']->query($query_leads);
        $count_leads = $GLOBALS['db']->fetchByAssoc($result_leads);
        $count_lead = $count_leads['count_leads'];
        $smarty->assign('COUNT_LEAD', $count_lead);

        # Query for count lead called of campaigns
        $query_not_call_leads = "SELECT COUNT(*) AS count_not_call_leads 
                                    FROM leads 
                                    WHERE campaign_id = '{$id_campaign}' AND deleted = 0
                                    AND ((call_status_lead = '1' AND call_status_description_lead = '') OR (call_status_lead = '1' AND call_status_description_lead IS NULL) OR call_status_lead = '' OR call_status_lead IS NULL)";
        $result_not_call_leads = $GLOBALS['db']->query($query_not_call_leads);
        $count_not_call_leads = $GLOBALS['db']->fetchByAssoc($result_not_call_leads);
        $count_not_call_lead = $count_not_call_leads['count_not_call_leads'];
        $smarty->assign('COUNT_NOT_CALL_LEAD', $count_not_call_lead);

        # Query for count lead called of campaigns
        $count_called_lead = $count_lead - $count_not_call_lead;
        $smarty->assign('COUNT_CALLED_LEAD', $count_called_lead);

        # Query for count lead not assign
        $query_not_assign_leads = "SELECT COUNT(*) AS count_not_assign_leads FROM leads WHERE campaign_id = '{$id_campaign}' AND deleted = 0 AND (assigned_user_id IS NULL OR assigned_user_id = '')";
        $result_not_assign_leads = $GLOBALS['db']->query($query_not_assign_leads);
        $count_not_assign_leads = $GLOBALS['db']->fetchByAssoc($result_not_assign_leads);
        $count_not_assign_lead = $count_not_assign_leads['count_not_assign_leads'];
        $smarty->assign('COUNT_NOT_ASSIGN_LEAD', $count_not_assign_lead);

        if (isset($_REQUEST['security_id'])) {
            $security_id = $_REQUEST['security_id'];

            # Query employee
            $query_count_employee = "SELECT COUNT(*) AS total  FROM users WHERE deleted = 0 AND id NOT IN (
                SELECT user_id  FROM securitygroups_users WHERE securitygroup_id = '{$security_id}' AND deleted = 0
            ) ORDER BY date_entered DESC";
            $result_count_employee = $GLOBALS['db']->query($query_count_employee);
            $count_employee = $GLOBALS['db']->fetchByAssoc($result_count_employee);
            $smarty->assign('TOTAL_EMPLOYEE', $count_employee['total'] - 1);

            # Query employee
            $query_employee = "SELECT *  FROM users WHERE deleted = 0 AND id NOT IN (
                SELECT user_id  FROM securitygroups_users WHERE securitygroup_id = '{$security_id}' AND deleted = 0
            ) ORDER BY date_entered DESC";
            $result_employee = $GLOBALS['db']->query($query_employee);
            while ($rows = $GLOBALS['db']->fetchByAssoc($result_employee)) {
                if ($rows['is_admin'] == 0) {
                    $list_employee_string .=  $rows['id'];
                    $list_employee_string .=  "_";
                    $idx += 1;
                    $id_employee = $rows['id'];
                    $username = $rows['user_name'];
                    $full_name = $rows['first_name'] . " " . $rows['last_name'];

                    # Query count lead assigned for employee
                    $query_assigned_employee = "SELECT COUNT(*) AS count_assigned_employee FROM leads WHERE deleted = 0 AND campaign_id = '{$id_campaign}' AND assigned_user_id = '{$id_employee}'";
                    $result_assigned_employee = $GLOBALS['db']->query($query_assigned_employee);
                    $count_assigned_employee = $GLOBALS['db']->fetchByAssoc($result_assigned_employee);
                    $count_assigned_employee = $count_assigned_employee['count_assigned_employee'];

                    # Query for quantity 
                    $query_get_quantity_assigned = "SELECT COUNT(*) AS count_get_quantity_assigned FROM quantity_leads WHERE user_id = '{$id_employee}' AND campaign_id = '{$id_campaign}'";
                    $result_get_quantity_assigned = $GLOBALS['db']->query($query_get_quantity_assigned);
                    $count_get_quantity_assigned = $GLOBALS['db']->fetchByAssoc($result_get_quantity_assigned);
                    if ($count_get_quantity_assigned['count_get_quantity_assigned'] == 0) {
                        $query_quantity = "INSERT INTO quantity_leads (user_id, campaign_id, quantity_assigned, quantity_to_cancel) VALUES ('{$id_employee}', '{$id_campaign}', {$count_assigned_employee}, 0)";
                        $GLOBALS['db']->query($query_quantity);

                        # Query for quantity 
                        $query_get_quantity_assigned = "SELECT * FROM quantity_leads WHERE user_id = '{$id_employee}' AND campaign_id = '{$id_campaign}'";
                        $result_get_quantity_assigned = $GLOBALS['db']->query($query_get_quantity_assigned);
                        $count_get_quantity_assigned = $GLOBALS['db']->fetchByAssoc($result_get_quantity_assigned);
                        $quantity_assigned_count = $count_get_quantity_assigned['quantity_assigned'];
                        $quantity_cancel_count = $count_get_quantity_assigned['quantity_to_cancel'];
                        $quantity_modified = $count_get_quantity_assigned['date_modified'];
                        $id_assigned = $id_employee . 'assigned';
                        $id_quantity_cancel = $id_employee . 'quantity_cancel';
                        $id_modified_date = $id_employee . 'modified_date';
                        $html_row_table_assigned .= "
                            <tr>
                                <th scope='row'>{$idx}</th>
                                <th scope='row'>{$username}</th>
                                <th scope='row'>{$full_name}</th>
                                <th scope='row' id='{$id_assigned}'>{$quantity_assigned_count}</th>
                                <th scope='row' id='{$id_quantity_cancel}'>{$quantity_cancel_count}</th>
                                <th scope='row' id='{$id_modified_date}'>{$quantity_modified}</th>
                                <th scope='row'>
                                <input type='number' id='cancel_{$id_employee}' class='form-control quantity_cancel' placeholder='' value=0>
                                <input type='hidden' class='id_employees_cancel' value={$id_employee}>
                                </th>
                            </tr>
                        ";
                    } else {
                        # Query for quantity 
                        $query_get_quantity_assigned = "SELECT * FROM quantity_leads WHERE user_id = '{$id_employee}' AND campaign_id = '{$id_campaign}'";
                        $result_get_quantity_assigned = $GLOBALS['db']->query($query_get_quantity_assigned);
                        $count_get_quantity_assigned = $GLOBALS['db']->fetchByAssoc($result_get_quantity_assigned);
                        $quantity_assigned_count = $count_get_quantity_assigned['quantity_assigned'];
                        $quantity_cancel_count = $count_get_quantity_assigned['quantity_to_cancel'];
                        $quantity_modified = $count_get_quantity_assigned['date_modified'];
                        $id_assigned = $id_employee . 'assigned';
                        $id_quantity_cancel = $id_employee . 'quantity_cancel';
                        $id_modified_date = $id_employee . 'modified_date';
                        $html_row_table_assigned .= "
                        <tr>
                            <th scope='row'>{$idx}</th>
                            <th scope='row'>{$username}</th>
                            <th scope='row'>{$full_name}</th>
                            <th scope='row' id='{$id_assigned}'>{$quantity_assigned_count}</th>
                            <th scope='row' id='{$id_quantity_cancel}'>{$quantity_cancel_count}</th>
                            <th scope='row' id='{$id_modified_date}'>{$quantity_modified}</th>
                            <th scope='row'>
                            <input type='number' id='cancel_{$id_employee}' class='form-control quantity_cancel' placeholder='' value=0>
                            <input type='hidden' class='id_employees_cancel' value={$id_employee}>
                            </th>
                        </tr>
                    ";
                    }

                    $html_row_table .= "
                        <tr>
                            <th scope='row'>{$idx}</th>
                            <th scope='row'>{$username}</th>
                            <th scope='row'>{$full_name}</th>
                            <th scope='row'>
                            <input type='number' id='quantity_{$id_employee}' class='form-control quantity' placeholder='' value=0>
                            <input type='hidden' class='id_employees' value={$id_employee}>
                            </th>
                        </tr>";
                }
            }
        }

        # admin
        else {

            # Query employee
            $query_employee = "SELECT *  FROM users WHERE deleted = 0 ORDER BY date_entered DESC";
            $result_employee = $GLOBALS['db']->query($query_employee);

            # Query employee
            $query_count_employee = "SELECT COUNT(*) AS total  FROM users WHERE deleted = 0 ORDER BY date_entered DESC";
            $result_count_employee = $GLOBALS['db']->query($query_count_employee);
            $count_employee = $GLOBALS['db']->fetchByAssoc($result_count_employee);
            $smarty->assign('TOTAL_EMPLOYEE', $count_employee['total']);


            while ($rows = $GLOBALS['db']->fetchByAssoc($result_employee)) {
                if ($rows['is_admin'] == 0) {
                    $list_employee_string .=  $rows['id'];
                    $list_employee_string .=  "_";
                    $idx += 1;
                    $id_employee = $rows['id'];
                    $username = $rows['user_name'];
                    $full_name = $rows['first_name'] . " " . $rows['last_name'];

                    # Query count lead assigned for employee
                    $query_assigned_employee = "SELECT COUNT(*) AS count_assigned_employee FROM leads WHERE deleted = 0 AND campaign_id = '{$id_campaign}' AND assigned_user_id = '{$id_employee}'";
                    $result_assigned_employee = $GLOBALS['db']->query($query_assigned_employee);
                    $count_assigned_employee = $GLOBALS['db']->fetchByAssoc($result_assigned_employee);
                    $count_assigned_employee = $count_assigned_employee['count_assigned_employee'];

                    # Query for quantity 
                    $query_get_quantity_assigned = "SELECT COUNT(*) AS count_get_quantity_assigned FROM quantity_leads WHERE user_id = '{$id_employee}' AND campaign_id = '{$id_campaign}'";
                    $result_get_quantity_assigned = $GLOBALS['db']->query($query_get_quantity_assigned);
                    $count_get_quantity_assigned = $GLOBALS['db']->fetchByAssoc($result_get_quantity_assigned);
                    if ($count_get_quantity_assigned['count_get_quantity_assigned'] == 0) {
                        $query_quantity = "INSERT INTO quantity_leads (user_id, campaign_id, quantity_assigned, quantity_to_cancel) VALUES ('{$id_employee}', '{$id_campaign}', {$count_assigned_employee}, 0)";
                        $GLOBALS['db']->query($query_quantity);

                        # Query for quantity 
                        $query_get_quantity_assigned = "SELECT * FROM quantity_leads WHERE user_id = '{$id_employee}' AND campaign_id = '{$id_campaign}'";
                        $result_get_quantity_assigned = $GLOBALS['db']->query($query_get_quantity_assigned);
                        $count_get_quantity_assigned = $GLOBALS['db']->fetchByAssoc($result_get_quantity_assigned);
                        $quantity_assigned_count = $count_get_quantity_assigned['quantity_assigned'];
                        $quantity_cancel_count = $count_get_quantity_assigned['quantity_to_cancel'];
                        $quantity_modified = $count_get_quantity_assigned['date_modified'];
                        $id_assigned = $id_employee . 'assigned';
                        $id_quantity_cancel = $id_employee . 'quantity_cancel';
                        $id_modified_date = $id_employee . 'modified_date';
                        $html_row_table_assigned .= "
                            <tr>
                                <th scope='row'>{$idx}</th>
                                <th scope='row'>{$username}</th>
                                <th scope='row'>{$full_name}</th>
                                <th scope='row' id='{$id_assigned}'>{$quantity_assigned_count}</th>
                                <th scope='row' id='{$id_quantity_cancel}'>{$quantity_cancel_count}</th>
                                <th scope='row' id='{$id_modified_date}'>{$quantity_modified}</th>
                                <th scope='row'>
                                <input type='number' id='cancel_{$id_employee}' class='form-control quantity_cancel' placeholder='' value=0>
                                <input type='hidden' class='id_employees_cancel' value={$id_employee}>
                                </th>
                            </tr>
                        ";
                    } else {
                        # Query for quantity 
                        $query_get_quantity_assigned = "SELECT * FROM quantity_leads WHERE user_id = '{$id_employee}' AND campaign_id = '{$id_campaign}'";
                        $result_get_quantity_assigned = $GLOBALS['db']->query($query_get_quantity_assigned);
                        $count_get_quantity_assigned = $GLOBALS['db']->fetchByAssoc($result_get_quantity_assigned);
                        $quantity_assigned_count = $count_get_quantity_assigned['quantity_assigned'];
                        $quantity_cancel_count = $count_get_quantity_assigned['quantity_to_cancel'];
                        $quantity_modified = $count_get_quantity_assigned['date_modified'];
                        $id_assigned = $id_employee . 'assigned';
                        $id_quantity_cancel = $id_employee . 'quantity_cancel';
                        $id_modified_date = $id_employee . 'modified_date';
                        $html_row_table_assigned .= "
                        <tr>
                            <th scope='row'>{$idx}</th>
                            <th scope='row'>{$username}</th>
                            <th scope='row'>{$full_name}</th>
                            <th scope='row' id='{$id_assigned}'>{$quantity_assigned_count}</th>
                            <th scope='row' id='{$id_quantity_cancel}'>{$quantity_cancel_count}</th>
                            <th scope='row' id='{$id_modified_date}'>{$quantity_modified}</th>
                            <th scope='row'>
                            <input type='number' id='cancel_{$id_employee}' class='form-control quantity_cancel' placeholder='' value=0>
                            <input type='hidden' class='id_employees_cancel' value={$id_employee}>
                            </th>
                        </tr>
                    ";
                    }

                    $html_row_table .= "
                        <tr>
                            <th scope='row'>{$idx}</th>
                            <th scope='row'>{$username}</th>
                            <th scope='row'>{$full_name}</th>
                            <th scope='row'>
                            <input type='number' id='quantity_{$id_employee}' class='form-control quantity' placeholder='' value=0>
                            <input type='hidden' class='id_employees' value={$id_employee}>
                            </th>
                        </tr>";
                }
            }
        }


        $smarty->assign('EMPLOYEE_LIST_STRING', $list_employee_string);
        $smarty->assign('INFORMATION', $mod_strings['LBL_INFORMATION_CAMPAIGN']);
        $smarty->assign('CAMPAIGN', $mod_strings['LBL_CAMPAIGNS']);
        $smarty->assign('STATUS', $mod_strings['LBL_STATUS_CAMPAIGN']);
        $smarty->assign('START_DAY', $mod_strings['LBL_START_DAY']);
        $smarty->assign('END_DAY', $mod_strings['LBL_END_DAY']);
        $smarty->assign('TOTAL_LEAD', $mod_strings['LBL_TOTAL']);
        $smarty->assign('CALLED', $mod_strings['LBL_CALLED']);
        $smarty->assign('NOT_CALL', $mod_strings['LBL_NOT_CALL']);
        $smarty->assign('NOT_ASSIGN', $mod_strings['LBL_NOT_ASSIGN']);
        $smarty->assign('TITLE', $mod_strings['LBL_MANAGE_DIVIDE_DATA']);
        $smarty->assign('STT', $mod_strings['LBL_STT']);
        $smarty->assign('FULL_NAME', $mod_strings['LBL_FULL_NAME']);
        $smarty->assign('USERNAME', $mod_strings['LBL_USERNAME']);
        $smarty->assign('EXTENSION', $mod_strings['LBL_EXTENSION']);
        $smarty->assign('QUANTITY', $mod_strings['LBL_QUANTITY']);
        $smarty->assign('QUANTITY_TO_CANCEL', $mod_strings['LBL_QUANTITY_TO_CANCEL']);
        $smarty->assign('QUANTITY_TO_CANCELED', $mod_strings['LBL_QUANTITY_TO_CANCELED']);
        $smarty->assign('MODIFIED_DATE', $mod_strings['LBL_MODIFIED_DATE']);
        $smarty->assign('DATA_NOT_ASSIGN', $html_row_table);
        $smarty->assign('DATA_ASSIGNED', $html_row_table_assigned);
        $smarty->assign('BTN_UPDATE', $mod_strings['LBL_UPDATE']);
        $smarty->assign('BTN_CANCEL', $mod_strings['LBL_CANCEL']);
        $smarty->assign('MODIFIED_DATE', $mod_strings['LBL_MODIFIED_DATE']);
        $smarty->assign('RECALL_LEADS', $mod_strings['LBL_RECALL_LEADS']);


        parent::display();
        $smarty->display('custom/modules/Leads/tpls/detail_divide.tpl');
    }
}
