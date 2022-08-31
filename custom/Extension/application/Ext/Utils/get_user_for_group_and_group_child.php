<?php

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