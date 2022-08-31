<?php
$query_get_call_log_leads = "SELECT * FROM call_log_leads ORDER BY call_date DESC";
$result_get_call_log_leads = $GLOBALS['db']->query($query_get_call_log_leads);
$leads = array();
while($rows = $GLOBALS['db']->fetchByAssoc($result_get_call_log_leads)){
    if ($rows['call_status_id'] == "" || $rows['call_status_id'] == NULL || ($rows['call_status_id'] == '1' && $rows['description_call_status_id'] == "") || ($rows['call_status_id'] == '1' && $rows['description_call_status_id'] == NULL)){
    }
    else {
        $myObj = new stdClass();
        $lead_id = $rows['lead_id'];
        $name = "";
        $query_lead = "SELECT first_name, last_name FROM leads WHERE id = '{$lead_id}' AND deleted = 0";
        $result_lead = $GLOBALS['db']->query($query_lead);
        $lead = $GLOBALS['db']->fetchByAssoc($result_lead);
        $name .= $lead['first_name'];
        $name .= " ";
        $name .= $lead['last_name'];
        $myObj->label = $name;
        $myObj->value = $rows['lead_id'];
        if (!in_array($myObj, $leads)){
            $leads[] = $myObj;
        }
    }
}

echo json_encode($leads);