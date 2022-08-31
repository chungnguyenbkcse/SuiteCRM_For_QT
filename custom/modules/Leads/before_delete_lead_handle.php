<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
class before_delete_lead_handle
{
    public $module = 'Leads';
    public function before_delete_lead_handle($bean, $event, $arguments)
    {
        $id = $bean->id;
        $query_total_call_log_leads = "SELECT COUNT(*) AS total FROM call_log_leads WHERE lead_id = '{$id}'";
        $result_total_call_log_leads = $GLOBALS['db']->query($query_total_call_log_leads);
        $total_call_log_leads = $GLOBALS['db']->fetchByAssoc($result_total_call_log_leads);
        if ($total_call_log_leads['total'] > 0){
            $query_call_log_leads = "DELETE FROM call_log_leads WHERE lead_id = '{$id}'";
            $GLOBALS['db']->query($query_call_log_leads);
        }

        $campaign_id = $bean->campaign_id;
        $assigned_user_id = $bean->assigned_user_id;
        if ($campaign_id != NULL && $campaign_id != "" && $assigned_user_id != NULL && $assigned_user_id != ""){
            $query_quantity_assigned = "SELECT quantity_assigned FROM quantity_leads WHERE user_id = '{$assigned_user_id}' AND campaign_id = '{$campaign_id}'";
            $result_quantity_assigned = $GLOBALS['db']->query($query_quantity_assigned);
            $quantity_assigned = $GLOBALS['db']->fetchByAssoc($result_quantity_assigned);
            $quantity_assigned_update = 0;
            if ($quantity_assigned['quantity_assigned'] > 1){
                $quantity_assigned_update = $quantity_assigned['quantity_assigned'] - 1;
            }
            else {
                $quantity_assigned_update = 0;
            }
            
            $query_update_quantity_assigned = "UPDATE quantity_leads SET quantity_assigned = $quantity_assigned_update WHERE user_id = '{$assigned_user_id}' AND campaign_id = '{$campaign_id}'";
            $GLOBALS['db']->query($query_update_quantity_assigned);
        }
    }
}