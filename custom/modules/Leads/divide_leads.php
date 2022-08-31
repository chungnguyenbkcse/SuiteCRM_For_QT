<?php 
if (isset($_GET['data']) && isset($_GET['id_campaign'])){
    $employee = $_GET['data'];
    $id_campaign = $_GET['id_campaign'];

    for ($i=0; $i < count($employee); $i++) { 
        # code...
        $id_employee = $employee[$i]['id'];
        $quantity = (int)$employee[$i]['quantity'];

        #Get count assigned
        $query_get_quantity_assigned = "SELECT * FROM quantity_leads WHERE user_id = '{$id_employee}' AND campaign_id = '{$id_campaign}'";
        $result_get_quantity_assigned = $GLOBALS['db']->query($query_get_quantity_assigned);
        $count_get_quantity_assigned = $GLOBALS['db']->fetchByAssoc($result_get_quantity_assigned);
        $update_count_quantity_assigned = $count_get_quantity_assigned['quantity_assigned'] + $quantity;

        #update count assigned
        $query_quantity_update = "UPDATE quantity_leads SET quantity_assigned = {$update_count_quantity_assigned} WHERE user_id = '{$id_employee}' AND campaign_id = '{$id_campaign}'";
        $GLOBALS['db']->query($query_quantity_update);
        
        $query_not_assign_leads = "SELECT * FROM leads WHERE (campaign_id = '{$id_campaign}' AND deleted = 0 AND assigned_user_id IS NULL) LIMIT {$quantity}";
        $result_not_assign_leads = $GLOBALS['db']->query($query_not_assign_leads);
        while($rows = $GLOBALS['db']->fetchByAssoc($result_not_assign_leads)){
            $id_lead = $rows['id'];
            $query_update_assign_user = "UPDATE leads SET assigned_user_id = '{$id_employee}' WHERE (id = '{$id_lead}' AND deleted = 0)";
            $GLOBALS['db']->query($query_update_assign_user);
        }
    }

    # Query for count lead not assign
    $query_count_not_assign_leads = "SELECT COUNT(*) AS count_not_assign_leads FROM leads WHERE campaign_id = '{$id_campaign}' AND deleted = 0 AND assigned_user_id IS NULL";
    $result_count_not_assign_leads = $GLOBALS['db']->query($query_count_not_assign_leads);
    $res = $GLOBALS['db']->fetchByAssoc($result_count_not_assign_leads);
    $count = $res['count_not_assign_leads'];

    $res = array();
    $res[] = Array('count' => $count);
    #Get count assigned
    $query_res = "SELECT * FROM quantity_leads WHERE campaign_id = '{$id_campaign}'";
    $result_res = $GLOBALS['db']->query($query_res);
    while($rows = $GLOBALS['db']->fetchByAssoc($result_res)){
        $res[] = $rows;
    }

    echo json_encode($res);
}