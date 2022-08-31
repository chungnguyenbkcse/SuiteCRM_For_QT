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


$html = "";
$campaigns = array('', '__Select Campaign__');
if (isset($_GET['employee_id'])) {
    $id_employee = $_GET['employee_id'];
    $GLOBALS['log']->fatal($id_employee);
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
    $GLOBALS['log']->fatal($query_campaigns);
    
    $result_campaigns = $GLOBALS['db']->query($query_campaigns);
    while ($rows = $GLOBALS['db']->fetchByAssoc($result_campaigns)) {
        $campaigns[$rows['id']] = $rows['name'];
    }

    foreach ($campaigns as $k => $v) {
        if ($v == '__Select Campaign__') {
            $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
        } else {
            $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
        }
    }
} else {
    $query = "SELECT id, name FROM campaigns WHERE deleted = 0";
    $result = $GLOBALS['db']->query($query);
    while ($rows = $GLOBALS['db']->fetchByAssoc($result)) {
        $campaigns[$rows['id']] = $rows['name'];
    }

    foreach ($campaigns as $k => $v) {
        if ($v == '__Select Campaign__') {
            $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
        } else {
            $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
        }
    }
}

echo $html;
