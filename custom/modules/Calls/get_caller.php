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

if (isset($_COOKIE["access_override_divide_lead"]) && $_COOKIE["access_override_divide_lead"] == '96') {
    $id_user = $_GET['user_id'];
    $GLOBALS['log']->fatal($id_user);
    $query_get_call_log_leads = "SELECT * FROM call_log_leads WHERE (";
    foreach (handleGetUserChild($id_user, []) as $key => $value) {
        if ($key == 0){
            $query_get_call_log_leads .= " user_call_id = '{$value}'";
        }
        else {
            $query_get_call_log_leads .= " OR user_call_id = '{$value}'";
        }
    }
    $callers = array();
    $query_get_call_log_leads .= ") ORDER BY call_date";
    $result_get_call_log_leads = $GLOBALS['db']->query($query_get_call_log_leads);
    while($rows = $GLOBALS['db']->fetchByAssoc($result_get_call_log_leads)){
        if ($rows['call_status_id'] == "" || $rows['call_status_id'] == NULL || ($rows['call_status_id'] == '1' && $rows['description_call_status_id'] == "") || ($rows['call_status_id'] == '1' && $rows['description_call_status_id'] == NULL)){
        }
        else {
            $GLOBALS['log']->fatal($rows);
            $myObj = new stdClass();
            $name = "";
            $user_call_id = $rows['user_call_id'];
            $query_user = "SELECT first_name, last_name FROM users WHERE id = '{$user_call_id}' AND deleted = 0";
            $result_user = $GLOBALS['db']->query($query_user);
            $user = $GLOBALS['db']->fetchByAssoc($result_user);
            $name .= $user['first_name'];
            $name .= " ";
            $name .= $user['last_name'];
            $myObj->label = $name;
    
            $myObj->value = $rows['user_call_id'];
            if (!in_array($myObj, $callers)){
                $callers[] = $myObj;
            }
        }
    }
    echo json_encode($callers);
}

else {
    $callers = array();
    $query_get_call_log_leads = "SELECT * FROM call_log_leads ORDER BY call_date";
    $result_get_call_log_leads = $GLOBALS['db']->query($query_get_call_log_leads);
    while($rows = $GLOBALS['db']->fetchByAssoc($result_get_call_log_leads)){
        if ($rows['call_status_id'] == "" || $rows['call_status_id'] == NULL || ($rows['call_status_id'] == '1' && $rows['description_call_status_id'] == "") || ($rows['call_status_id'] == '1' && $rows['description_call_status_id'] == NULL)){
        }
        else {
            $myObj = new stdClass();
            $name = "";
            $user_call_id = $rows['user_call_id'];
            $query_user = "SELECT first_name, last_name FROM users WHERE id = '{$user_call_id}' AND deleted = 0";
            $result_user = $GLOBALS['db']->query($query_user);
            $user = $GLOBALS['db']->fetchByAssoc($result_user);
            $name .= $user['first_name'];
            $name .= " ";
            $name .= $user['last_name'];
            $myObj->label = $name;
    
            $myObj->value = $rows['user_call_id'];
            if (!in_array($myObj, $callers)){
                $callers[] = $myObj;
            }
        }
    }

    echo json_encode($callers);
}