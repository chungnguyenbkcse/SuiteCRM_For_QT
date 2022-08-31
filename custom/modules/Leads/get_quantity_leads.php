<?php

function handleGetUserChild($parent_id, $list_child) {
    //echo "Enter {$parent_id}";
    $query_security_group = "SELECT * FROM securitygroups WHERE assigned_user_id = '{$parent_id}'";
    $result_security_group = $GLOBALS['db']->query($query_security_group);
    $list_child[] = $parent_id;
    while($rows = $GLOBALS['db']->fetchByAssoc($result_security_group)){
        //$GLOBALS['log']->fatal("Child group");
        $id = $rows['id'];
        
        $query_user_in_group = "SELECT user_id FROM securitygroups_users WHERE securitygroup_id = '{$id}'";
        $result_query_user_in_group = $GLOBALS['db']->query($query_user_in_group);
        while($rows_1 = $GLOBALS['db']->fetchByAssoc($result_query_user_in_group)){
            $child_id = $rows_1['user_id'];
            $list_child = handleGetUserChild($child_id, $list_child);
        }
    }
    return $list_child;
}

if (isset($_REQUEST['id_campaign'])) {
    $html_row_table = "";

    $campaign_id = $_REQUEST['id_campaign'];
    $query_campaign = "SELECT name FROM campaigns WHERE id = '{$campaign_id}' AND deleted = 0";
    $result_campaign = $GLOBALS['db']->query($query_campaign);
    $campaigns = $GLOBALS['db']->fetchByAssoc($result_campaign);
    $campaign_name = $campaigns['name'];

    $query_quantity_leads = "SELECT * FROM quantity_leads WHERE campaign_id = '{$campaign_id}'";
    $result_quantity_leads = $GLOBALS['db']->query($query_quantity_leads);
    $index = 0;
    while ($rows = $GLOBALS['db']->fetchByAssoc($result_quantity_leads)) {
        $quantity_assigned = $rows['quantity_assigned'];
        if ($quantity_assigned > 0) {
            $index += 1;
            $user_id = $rows['user_id'];

            #query user
            $query_user = "SELECT first_name FROM users WHERE id = '{$user_id}' AND deleted = 0";
            $result_user = $GLOBALS['db']->query($query_user);
            $users = $GLOBALS['db']->fetchByAssoc($result_user);
            $user_name = $users['first_name'];

            $total_called = 0;
            $toal_not_called_yet = 0;
            $percent = 0;
            $never_contact = 0;
            $contacted = 0;
            $interest = 0;
            $agreed = 0;
            $refuse = 0;
            #query leads
            $query_leads = "SELECT * FROM leads WHERE assigned_user_id = '{$user_id}' AND campaign_id = '{$campaign_id}' AND deleted = 0";
            $result_leads = $GLOBALS['db']->query($query_leads);
            while ($leads = $GLOBALS['db']->fetchByAssoc($result_leads)) {
                if ($leads['call_status_lead'] == "" || $leads['call_status_lead'] == NULL || ($leads['call_status_lead'] == "1" and $leads['call_status_description_lead'] == "") || ($leads['call_status_lead'] == "1" and $leads['call_status_description_lead'] == NULL)) {
                    $toal_not_called_yet += 1;
                } else {
                    $total_called += 1;
                    if ($leads['call_status_lead'] == '1') {
                        $never_contact += 1;
                    } else if ($leads['call_status_lead'] == '2') {
                        $contacted += 1;
                    } else if ($leads['call_status_lead'] == '3') {
                        $interest += 1;
                    } else if ($leads['call_status_lead'] == '4') {
                        $agreed += 1;
                    } else if ($leads['call_status_lead'] == '5') {
                        $refuse += 1;
                    }
                }
            }
            if ($total_called != 0) {
                $percent = round(($contacted + $interest + $agreed + $refuse) / $total_called * 100);
            }
            $html_row_table .= sprintf("
                    <tr>
                        <th scope='row'>{$index}</th>
                        <th scope='row'>{$user_name}</th>
                        <th scope='row'>{$campaign_name}</th>
                        <th scope='row'>{$quantity_assigned}</th>
                        <th scope='row'>{$total_called}</th>
                        <th scope='row'>{$toal_not_called_yet}</th>
                        <th scope='row'>{$percent}</th>
                        <th scope='row'>{$never_contact}</th>
                        <th scope='row'>{$contacted}</th>
                        <th scope='row'>{$interest}</th>
                        <th scope='row'>{$agreed}</th>
                        <th scope='row'>{$refuse}</th>
                    </tr>
                ");
        }
    }

    if ($html_row_table == "") {
        $html_row_table = "
        <tr>
            <th scope='row'>No found data</th>
        </tr>";
    }

    echo $html_row_table;
} else {
    if (isset($_GET['employee_id'])) {
        $html_row_table = "";
        $index = 0;
        $id_employee = $_GET['employee_id'];
        $query_campaigns = "SELECT * FROM campaigns WHERE deleted = 0 AND (";
        foreach (handleGetUserChild($id_employee, []) as $key => $value) {
            if ($key == 0){
                $query_campaigns .= " assigned_user_id = '{$value}'";
            }
            else {
                $query_campaigns .= " OR assigned_user_id = '{$value}'";
            }
        }

        $query_campaigns .= ") ORDER BY date_entered DESC";  
        $result_campaign = $GLOBALS['db']->query($query_campaigns);
        while ($campaigns = $GLOBALS['db']->fetchByAssoc($result_campaign)) {
            $campaign_name = $campaigns['name'];
            $campaign_id = $campaigns['id'];
            //$html_row_table .=  ' && ';
            $query_quantity_leads = "SELECT * FROM quantity_leads WHERE campaign_id = '{$campaign_id}'";
            $result_quantity_leads = $GLOBALS['db']->query($query_quantity_leads);
            while ($quantitys = $GLOBALS['db']->fetchByAssoc($result_quantity_leads)) {
                $quantity_assigned = $quantitys['quantity_assigned'];
                if ($quantity_assigned > 0) {
                    $index += 1;
                    $client_id = $quantitys['user_id'];
                    //$html_row_table .= $index . "----" . $id_user . ' + ' . $campaign_name . ' + ' . $client_id . ' && ';
                    #query user
                    $query_user_s = "SELECT first_name, last_name FROM users WHERE id = '{$client_id}' AND deleted = 0";
                    $result_user_s = $GLOBALS['db']->query($query_user_s);
                    $users_s = $GLOBALS['db']->fetchByAssoc($result_user_s);
                    $user_name = $users_s['first_name'] . $users_s['last_name'];

                    $total_called = 0;
                    $toal_not_called_yet = 0;
                    $percent = 0;
                    $never_contact = 0;
                    $contacted = 0;
                    $interest = 0;
                    $agreed = 0;
                    $refuse = 0;
                    #query leads
                    $query_leads = "SELECT * FROM leads WHERE assigned_user_id = '{$client_id}' AND deleted = 0";
                    $result_leads = $GLOBALS['db']->query($query_leads);
                    while ($leads = $GLOBALS['db']->fetchByAssoc($result_leads)) {
                        if ($leads['call_status_lead'] == "" || $leads['call_status_lead'] == NULL || ($leads['call_status_lead'] == "1" and $leads['call_status_description_lead'] == "") || ($leads['call_status_lead'] == "1" and $leads['call_status_description_lead'] == NULL)) {
                            $toal_not_called_yet += 1;
                        } else {
                            $total_called += 1;
                            if ($leads['call_status_lead'] == '1') {
                                $never_contact += 1;
                            } else if ($leads['call_status_lead'] == '2') {
                                $contacted += 1;
                            } else if ($leads['call_status_lead'] == '3') {
                                $interest += 1;
                            } else if ($leads['call_status_lead'] == '4') {
                                $agreed += 1;
                            } else if ($leads['call_status_lead'] == '5') {
                                $refuse += 1;
                            }
                        }
                    }
                    if ($total_called != 0) {
                        $percent = round(($contacted + $interest + $agreed + $refuse) / $total_called * 100);
                    }
                    $html_row_table .= sprintf("
                                <tr>
                                    <th scope='row'>{$index}</th>
                                    <th scope='row'>{$user_name}</th>
                                    <th scope='row'>{$campaign_name}</th>
                                    <th scope='row'>{$quantity_assigned}</th>
                                    <th scope='row'>{$total_called}</th>
                                    <th scope='row'>{$toal_not_called_yet}</th>
                                    <th scope='row'>{$percent}</th>
                                    <th scope='row'>{$never_contact}</th>
                                    <th scope='row'>{$contacted}</th>
                                    <th scope='row'>{$interest}</th>
                                    <th scope='row'>{$agreed}</th>
                                    <th scope='row'>{$refuse}</th>
                                </tr>
                            ");
                }
            }
        }

        if ($html_row_table == "") {
            $html_row_table = "
        <tr>
            <th scope='row'>No found data</th>
        </tr>";
        }

        echo $html_row_table;
    } else {
        $html_row_table = "";
        $index = 0;
        $query_campaign = "SELECT * FROM campaigns WHERE deleted = 0";
        $result_campaign = $GLOBALS['db']->query($query_campaign);
        while ($campaigns = $GLOBALS['db']->fetchByAssoc($result_campaign)) {
            $campaign_name = $campaigns['name'];
            $campaign_id = $campaigns['id'];
            $query_quantity_leads = "SELECT * FROM quantity_leads WHERE campaign_id = '{$campaign_id}'";
            $result_quantity_leads = $GLOBALS['db']->query($query_quantity_leads);
            while ($rows = $GLOBALS['db']->fetchByAssoc($result_quantity_leads)) {
                $quantity_assigned = $rows['quantity_assigned'];
                if ($quantity_assigned > 0) {
                    $index += 1;
                    $user_id = $rows['user_id'];
                    #query user
                    $query_user = "SELECT first_name, last_name FROM users WHERE id = '{$user_id}' AND deleted = 0";
                    $result_user = $GLOBALS['db']->query($query_user);
                    $users = $GLOBALS['db']->fetchByAssoc($result_user);
                    $user_name = $users['first_name'] . $users['last_name'];

                    $total_called = 0;
                    $toal_not_called_yet = 0;
                    $percent = 0;
                    $never_contact = 0;
                    $contacted = 0;
                    $interest = 0;
                    $agreed = 0;
                    $refuse = 0;
                    #query leads
                    $query_leads = "SELECT * FROM leads WHERE assigned_user_id = '{$user_id}' AND deleted = 0";
                    $result_leads = $GLOBALS['db']->query($query_leads);
                    while ($leads = $GLOBALS['db']->fetchByAssoc($result_leads)) {
                        if ($leads['call_status_lead'] == "" || $leads['call_status_lead'] == NULL || ($leads['call_status_lead'] == "1" and $leads['call_status_description_lead'] == "") || ($leads['call_status_lead'] == "1" and $leads['call_status_description_lead'] == NULL)) {
                            $toal_not_called_yet += 1;
                        } else {
                            $total_called += 1;
                            if ($leads['call_status_lead'] == '1') {
                                $never_contact += 1;
                            } else if ($leads['call_status_lead'] == '2') {
                                $contacted += 1;
                            } else if ($leads['call_status_lead'] == '3') {
                                $interest += 1;
                            } else if ($leads['call_status_lead'] == '4') {
                                $agreed += 1;
                            } else if ($leads['call_status_lead'] == '5') {
                                $refuse += 1;
                            }
                        }
                    }
                    if ($total_called != 0) {
                        $percent = round(($contacted + $interest + $agreed + $refuse) / $total_called * 100);
                    }
                    $html_row_table .= sprintf("
                            <tr>
                                <th scope='row'>{$index}</th>
                                <th scope='row'>{$user_name}</th>
                                <th scope='row'>{$campaign_name}</th>
                                <th scope='row'>{$quantity_assigned}</th>
                                <th scope='row'>{$total_called}</th>
                                <th scope='row'>{$toal_not_called_yet}</th>
                                <th scope='row'>{$percent}</th>
                                <th scope='row'>{$never_contact}</th>
                                <th scope='row'>{$contacted}</th>
                                <th scope='row'>{$interest}</th>
                                <th scope='row'>{$agreed}</th>
                                <th scope='row'>{$refuse}</th>
                            </tr>
                        ");
                }
            }
        }

        if ($html_row_table == "") {
            $html_row_table = "
        <tr>
            <th scope='row'>No found data</th>
        </tr>";
        }

        echo $html_row_table;
    }
}
