<?php

function getStates($lead_call_status_Id) {
    global $db;
        
    $query = "SELECT id, main_id, description_id FROM relationship_call_status_lead where main_id = '{$lead_call_status_Id}'";

    $result = $db->query($query, false);
    
    $list = array('' => 'Select');



    while (($row = $db->fetchByAssoc($result)) != null) {
        $query1 = "SELECT id, description FROM call_status_description_lead where id = '{$row['description_id']}'";
        $result1 = $db->query($query1, false);
        while (($row1 = $db->fetchByAssoc($result1)) != null)
        {

            $list[$row1['id']] = $row1['description'];
        }
    }
    
    return $list;
}

if ($_GET['case'] == 1) {
    $states = getStates($_GET['id']);
    $html = "";
    foreach($states as $k => $v) {
        if ($_GET['call_status_description_lead_id'] == $k){
            $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
        }
        else {
            $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
        }
    }
    echo $html;
}

exit;