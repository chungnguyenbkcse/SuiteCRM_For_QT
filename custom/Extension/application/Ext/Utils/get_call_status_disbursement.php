<?php
function get_call_status_disbursement() {
    $temp_result = array();
    $query = "SELECT id, call_status_disbursement FROM leads";
    $result = $GLOBALS['db']->query($query);
    while($row = $GLOBALS['db']->fetchByAssoc($result)){
        $temp_result[$row['id']] = $row['call_status_disbursement'];
    }
    return $temp_result;
}