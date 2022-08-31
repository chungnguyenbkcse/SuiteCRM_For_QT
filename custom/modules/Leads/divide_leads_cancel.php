<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');

if (isset($_GET['data']) && isset($_GET['id_campaign'])){
    $employee = $_GET['data'];
    $id_campaign = $_GET['id_campaign'];
    for ($i=0; $i < count($employee); $i++) {
        $id_employee = $employee[$i]['id'];
        $quantity_cancel = (int)$employee[$i]['quantity_cancel'];

        #Get count assigned
        $query_get_quantity_assigned = "SELECT * FROM quantity_leads WHERE user_id = '{$id_employee}' AND campaign_id = '{$id_campaign}'";
        $result_get_quantity_assigned = $GLOBALS['db']->query($query_get_quantity_assigned);
        $count_get_quantity_assigned = $GLOBALS['db']->fetchByAssoc($result_get_quantity_assigned);
        $update_count_quantity_assigned = $count_get_quantity_assigned['quantity_assigned'] - $quantity_cancel;
        
        $update_count_quantity_cancel = $count_get_quantity_assigned['quantity_to_cancel'] + $quantity_cancel;
        if ($update_count_quantity_assigned <= 0){
            $update_count_quantity_cancel = 0;
        }

        if ($quantity_cancel != 0){
            $date_modified = date('Y-m-d H:i:s');

            #update count assigned
            $query_quantity_update = "UPDATE quantity_leads SET quantity_assigned = {$update_count_quantity_assigned}, quantity_to_cancel = {$update_count_quantity_cancel}, date_modified = '{$date_modified}'  WHERE user_id = '{$id_employee}' AND campaign_id = '{$id_campaign}'";
            $GLOBALS['db']->query($query_quantity_update);
        }

        $query_not_assign_leads = "SELECT * FROM leads WHERE (campaign_id = '{$id_campaign}' AND assigned_user_id = '{$id_employee}' AND deleted = 0) LIMIT {$quantity_cancel}";
        $result_not_assign_leads = $GLOBALS['db']->query($query_not_assign_leads);
        while($rows = $GLOBALS['db']->fetchByAssoc($result_not_assign_leads)){
            $id_lead = $rows['id'];
            $query_update_assign_user = "UPDATE leads SET assigned_user_id = NULL WHERE (id = '{$id_lead}') AND deleted = 0";
            $GLOBALS['db']->query($query_update_assign_user);
        }

    }

    $list_res = array();

    # Query for count lead not assign
    $query_count_not_assign_leads = "SELECT COUNT(*) AS count_not_assign_leads FROM leads WHERE campaign_id = '{$id_campaign}' AND deleted = 0 AND assigned_user_id IS NULL";
    $result_count_not_assign_leads = $GLOBALS['db']->query($query_count_not_assign_leads);
    $res = $GLOBALS['db']->fetchByAssoc($result_count_not_assign_leads);
    $count = $res['count_not_assign_leads'];
    $list_res[] = Array('count' => $count);

    $query_res = "SELECT * FROM quantity_leads WHERE campaign_id = '{$id_campaign}' ";
    $result_res = $GLOBALS['db']->query($query_res);
    while($rows = $GLOBALS['db']->fetchByAssoc($result_res)){
        $list_res[] = $rows;
    }

    echo json_encode($list_res);
}