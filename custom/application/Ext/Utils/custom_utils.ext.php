<?php 
 //WARNING: The contents of this file are auto-generated


function getCallStatusLeadFromDb() {
    global $db;
        
    $query = "SELECT id, description FROM call_status_lead";

    $result = $db->query($query, false);
    
    $list = array(''=>'Select');


    while (($row = $db->fetchByAssoc($result)) != null) {
        $list[$row['id']] = $row['description'];
    }
    
    return $list;
}

function getGroupSecurity() {
    global $db;
        
    $query = "SELECT id, name FROM securitygroups";

    $result = $db->query($query, false);

    $list = array('' => 'Select');
    while (($row = $db->fetchByAssoc($result)) != null) {
        $list[$row['id']] = $row['name'];
    }
    
    return $list;
}

function get_call_status() {
    $temp_result = array();
    if ($_REQUEST['action'] == "index" || $_REQUEST['action'] == "allotted"){
        $query = "SELECT id,description FROM call_status_lead";
        $result = $GLOBALS['db']->query($query);
        while($row = $GLOBALS['db']->fetchByAssoc($result)){
            $temp_result[$row['id']] = $row['description'];
        }
    }
    else if ($_REQUEST['action'] == "disbursement"){
        $query = "SELECT id,description FROM call_status_lead WHERE id = '4'";
        $result = $GLOBALS['db']->query($query);
        while($row = $GLOBALS['db']->fetchByAssoc($result)){
            $temp_result[$row['id']] = $row['description'];
        }
    }
    else if ($_REQUEST['action'] == "interested"){
        $query = "SELECT id,description FROM call_status_lead WHERE id = '4' OR id  = '3'";
        $result = $GLOBALS['db']->query($query);
        while($row = $GLOBALS['db']->fetchByAssoc($result)){
            $temp_result[$row['id']] = $row['description'];
        }
    }

    else if ($_REQUEST['action'] == "unaeffect"){
        $query = "SELECT id,description FROM call_status_lead WHERE id = '1'";
        $result = $GLOBALS['db']->query($query);
        while($row = $GLOBALS['db']->fetchByAssoc($result)){
            $temp_result[$row['id']] = $row['description'];
        }
    }
    return $temp_result;
}

function get_call_status_description_lead() {
    $temp_result = array();
    return $temp_result;
}

function get_call_status_disbursement() {
    $temp_result = array();
    $query = "SELECT id, call_status_disbursement FROM leads";
    $result = $GLOBALS['db']->query($query);
    while($row = $GLOBALS['db']->fetchByAssoc($result)){
        $temp_result[$row['id']] = $row['call_status_disbursement'];
    }
    return $temp_result;
}

function get_campaign_name() {
    $temp_result = array();
    $query = "SELECT id,name FROM campaigns WHERE deleted = 0 AND  id IN (SELECT DISTINCT campaign_id FROM leads WHERE deleted = 0)";
    $result = $GLOBALS['db']->query($query);
    while($row = $GLOBALS['db']->fetchByAssoc($result)){
        $temp_result[$row['id']] = $row['name'];
    }
    return $temp_result;
}


function handleGetUser($parent_id, $list_child) {
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
            $list_child = handleGetUser($child_id, $list_child);
        }
    }
    return $list_child;
}


function get_user_for_group_and_group_child() {
    global $current_user;
    $temp_result = array();
    $user = BeanFactory::getBean('Users', $current_user->id);
    $id_employee = $user->id;

    if(isset($_COOKIE["role"])) {
        if ($_COOKIE["role"] == "disbursement"){
            $query_user = "SELECT * FROM users WHERE deleted = 0 AND  is_admin = 0 ORDER BY date_entered DESC";  
            $GLOBALS['log']->fatal($query_user);
            
            $result_users = $GLOBALS['db']->query($query_user);
            while ($rows = $GLOBALS['db']->fetchByAssoc($result_users)) {
                $temp_result[$rows['id']] = $rows['user_name'];
            }
        }

        else if ($_COOKIE["role"] == "admin"){
            $query_user = "SELECT * FROM users WHERE deleted = 0 ORDER BY date_entered DESC";  
            $GLOBALS['log']->fatal($query_user);
            
            $result_users = $GLOBALS['db']->query($query_user);
            while ($rows = $GLOBALS['db']->fetchByAssoc($result_users)) {
                $temp_result[$rows['id']] = $rows['user_name'];
            }
        }
        else {
            $query_user = "SELECT * FROM users WHERE deleted = 0 AND (";
            foreach (handleGetUser($id_employee, []) as $key => $value) {
                if ($key == 0){
                    $query_user .= " id = '{$value}'";
                }
                else {
                    $query_user .= " OR id = '{$value}'";
                }
            }
        
            $query_user .= ") ORDER BY date_entered DESC";  
            $GLOBALS['log']->fatal($query_user);
            
            $result_users = $GLOBALS['db']->query($query_user);
            while ($rows = $GLOBALS['db']->fetchByAssoc($result_users)) {
                $temp_result[$rows['id']] = $rows['user_name'];
            }
        }
    }

    return $temp_result;
}
?>