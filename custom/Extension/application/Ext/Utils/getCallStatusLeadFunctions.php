<?php
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