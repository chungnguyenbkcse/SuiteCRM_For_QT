<?php 
function getStates($call_status_description_lead_id) {
    global $db;
    $query1 = "SELECT description FROM call_status_description_lead where id = '{$call_status_description_lead_id}'";
    $result1 = $db->query($query1, false);
    $row1 = $db->fetchByAssoc($result1);
    return $row1['description'];
}
if (isset($_GET['id'])){
    $states = getStates($_GET['id']);
    echo $states;
}