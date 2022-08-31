<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/MVC/View/SugarView.php');

class CustomCallsViewcall_log_leads extends SugarView
{
    public function display()
    {
        global $mod_strings, $current_user;
        $user = BeanFactory::getBean('Users', $current_user->id);
        $smarty = new Sugar_Smarty();

        if ($user->is_admin || (isset($_COOKIE["access_override_divide_lead"]) && $_COOKIE["access_override_divide_lead"] == '96')){
            $smarty->assign('ADMIN', '
                <div class="row" id="filter"> 
                    <div class="col-lg-3 col-xs-3">
                        <label id="user_label">Người gọi:</label>
                        <input type="text" name="user_call_name" id = "user_call_name">
                        <input type="hidden" name="user_call_id" id = "user_call_id">
                    </div>
                    <div class="col-lg-3 col-xs-3">
                        <label >Khách hàng:</label>
                        <input type="text" name="lead_name" id = "lead_name">
                        <input type="hidden" name="lead_filter_id" id = "lead_filter_id">
                    </div>
                    <div class="col-lg-2 col-xs-2">
                        <label >Từ:</label>
                        <input type="date" name="start_date" id = "start_date">
                    </div>
                    <div class="col-lg-2 col-xs-2">
                        <label >Đến:</label>
                        <input type="date" name="end_date" id = "end_date">
                    </div>
                    <div class="col-lg-2 col-xs-2">
                        <button type="button" class="btn btn-filter" id="btn-filter">Lọc</button>
                    </div>
                </div>
                
            ');
        }
        else {
            $smarty->assign('ADMIN', '
                <div class="row" id="filter"> 
                    <div class="col-lg-3 col-xs-3">
                        <label >Khách hàng:</label>
                        <input type="text" name="lead_name" id = "lead_name">
                        <input type="hidden" name="lead_filter_id" id = "lead_filter_id">
                    </div>
                    <div class="col-lg-2 col-xs-2">
                        <label >Từ:</label>
                        <input type="date" name="start_date" id = "start_date">
                    </div>
                    <div class="col-lg-2 col-xs-2">
                        <label >Đến:</label>
                        <input type="date" name="end_date" id = "end_date">
                    </div>
                    <div class="col-lg-2 col-xs-2">
                        <button type="button" class="btn btn-filter" id="btn-filter">Lọc</button>
                    </div>
                </div>
                
            ');
        }
        $smarty->assign('CALL_LOG_LEADS', $mod_strings['LNK_CALL_LOG_LEADS']);
        $smarty->assign('STT', $mod_strings['LBL_STT']);
        $smarty->assign('USER', $mod_strings['LBL_USER']);
        $smarty->assign('LEAD', $mod_strings['LBL_LEAD']);
        $smarty->assign('CALL_DATE', $mod_strings['LBL_CALL_DATE']);
        $smarty->assign('CALL_STATUS', $mod_strings['LBL_CALL_STATUS']);
        $smarty->assign('CALL_STATUS_DESCRIPTION', $mod_strings['LBL_CALL_STATUS_DESCRIPTION']);
        $smarty->assign('USER_ID', $current_user->id);
        parent::display();
        $smarty->display('custom/modules/Calls/tpls/call_log_leads.tpl');
    }
}