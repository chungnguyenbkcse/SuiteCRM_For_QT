<?php 
function getStates($lead_call_status_Id) {
    global $db;
        
    $query = "SELECT id, main_id, description_id FROM relationship_call_status_lead where main_id  = '{$lead_call_status_Id}'";

    $result = $db->query($query, false);
    
    $list = array();

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
if (isset($_GET['id'])){
    $html = "";
    for ($i=0; $i < count($_GET['id']); $i++) { 
        # code...
        $states = getStates($_GET['id'][$i]);
        foreach($states as $k => $v) {
            $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
        }
    }
    echo $html;
}