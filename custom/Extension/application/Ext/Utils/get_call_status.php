<?php
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