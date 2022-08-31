<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');

class HandleDB {
    function addRecordDbLogicHook (){
        global $app_list_strings;
        
        $query_1 = "SELECT COUNT(*) AS total  FROM call_status_lead";
        $result_1 = $GLOBALS['db']->query($query_1);
        $row_1 = $GLOBALS['db']->fetchByAssoc($result_1);
        $total_1 = $row_1['total'];
        global $current_language;
        if (isset($_REQUEST['login_language'])) {
            $current_language = ($_REQUEST['login_language'] == $current_language) ? $current_language : $_REQUEST['login_language'];
        }

        $query_count_divide_lead_action = "SELECT COUNT(*) AS total  FROM acl_actions WHERE name = 'divide' AND deleted = 0";
        $result_count_divide_lead_action = $GLOBALS['db']->query($query_count_divide_lead_action);
        $rows_count_divide_lead_action = $GLOBALS['db']->fetchByAssoc($result_count_divide_lead_action);
        $total_divide_lead_action = $rows_count_divide_lead_action['total'];

        if ($total_divide_lead_action == 0){
            $ACLActionBean = BeanFactory::newBean('ACLActions');
            $ACLActionBean->name = 'divide';
            $ACLActionBean->category = 'Leads';
            $ACLActionBean->acltype = 'module';
            $ACLActionBean->aclaccess = 90;
            $ACLActionBean->deleted = 0;
            $ACLActionBean->save();
        }

        if ($current_language == "vi_VN"){
            if ($total_1 == 0){
                $query_insert_call_status_lead = "INSERT INTO call_status_lead (id, name, description) VALUES ('1','NCT','Chưa liên hệ'), ('2','COT','Đã liên hệ'), ('3','INT','Khách hàng quan tâm'), ('4','AGD','Khách hàng đồng ý'),('5','RFS','Khách hàng từ chối');";
    
                $GLOBALS['db']->query($query_insert_call_status_lead);
            }
    
            $query_2 = "SELECT COUNT(*) AS total  FROM call_status_description_lead";
            $result_2 = $GLOBALS['db']->query($query_2);
            $row_2 = $GLOBALS['db']->fetchByAssoc($result_2);
            $total_2 = $row_2['total'];
    
            if ($total_2 == 0) {
                $query_insert_call_status_description_lead = "INSERT INTO call_status_description_lead (id, name, description) VALUES ('1','01_NCT_Engaged','Số khách hàng đang bận'), 
                                                                ('2','02_NCT_No_response','Không có phản hồi từ khách hàng'),
                                                                ('3','03_NCT_Not_available','Số điện thoại khách hàng không sẵn sàng (tắt máy, không tín hiệu ) - theo dõi lại.'),
                                                                ('4','04_NCT_Relative_call_back','Người thân yêu cầu gọi lại sau'),
                                                                ('5','05_NCT_Relative_call_new','Người thân cung cấp số điện thoại mới'),
                                                                ('6','06_NCT_Invalid_number','Số điện thoại bị thiếu số hoặc tổng đài thông báo số điện thoại không tồn tại'),
                                                                ('7','01_COT_Not_eligible_No_Card','Khách hàng không có bất kỳ thẻ nào'),
                                                                ('8','02_COT_Not_eligible_Wrong_Info','Khách hàng không phù hợp về thông tin'),
                                                                ('9','03_COT_Not_interested_Complain','Khách hàng phàn nàn liên hệ nhiều'),
                                                                ('10','04_COT_Client_busy','Khách hàng đang bận và chưa tư vấn'),
                                                                ('11','01_INT_no_money_in_card','Khách hàng bị từ chối / Không đủ tiền trên thẻ'),
                                                                ('12','02_INT_Consider_Call_back','Khách hàng đang suy nghĩ lại - gọi lại sau'),
                                                                ('13','03_INT_Client_need_a_card','Khách hàng muốn vay chưa có thẻ'),
                                                                ('14','04_INT_Client_interest_but_no_pick_up','Khách hàng quan tâm nhưng chưa bắt máy'),
                                                                ('15','05_INT_Client_interest_but_no_pick_up','Khách hàng đang đợi thẻ về'),
                                                                ('16','01_AGD_Approved_and_paid_money','Khách hàng được chấp nhận và đã được chuyển tiền'),
                                                                ('17','02_AGD_Schedules_Application_with_disbursement','Khách hàng đồng ý và chuyển sang bộ phận giải ngân'),
                                                                ('18','03_AGD_Agreed_but_still_not_contact','Khách hàng đồng ý nhưng chưa giải ngân được'),
                                                                ('19','01_RFS_Refused_negative','Khách hàng từ chối và có thái độ tiêu cực'),
                                                                ('20','02_RFS_Refused_High_Rate','Khách hàng từ chối lãi suất cao'),
                                                                ('21','03_RFS_Refused_Loan_Amount','Khách hàng từ chối khoản vay không phù hợp'),
                                                                ('22','04_RFS_Refused_No_need','Khách hàng từ chối không cần trong thời gian này');";
    
                $GLOBALS['db']->query($query_insert_call_status_description_lead);
            }
    
            $query_3 = "SELECT COUNT(*) AS total  FROM relationship_call_status_lead";
            $result_3 = $GLOBALS['db']->query($query_3);
            $row_3 = $GLOBALS['db']->fetchByAssoc($result_3);
            $total_3 = $row_3['total'];
    
            if ($total_3 == 0) {
                $query_relationship_call_status = "INSERT INTO relationship_call_status_lead (id, main_id, description_id) VALUES ('1','1','1'), ('2','1','2'), ('3','1','3'),('4','1','4'),('5','1','5'),('6','1','6'),('7','2','7'),('8','2','8'),('9','2','9'),('10','2','10'),('11','3','11'),('12','3','12'),('13','3','13'),('14','3','14'),('15','3','15'),('16','4','16'),('17','4','17'),('18','4','18'),('19','5','19'),('20','5','20'),('21','5','21'),('22','5','22');";
    
                $GLOBALS['db']->query($query_relationship_call_status);
            }
        }
        else {
            if ($total_1 == 0){
                $query_insert_call_status_lead = "INSERT INTO call_status_lead (id, name, description) VALUES ('1','NCT','{$GLOBALS['app_list_strings']['call_status_lead_dom']['NCT']}'), ('2','COT','{$GLOBALS['app_list_strings']['call_status_lead_dom']['COT']}'), ('3','INT','{$GLOBALS['app_list_strings']['call_status_lead_dom']['INT']}'), ('4','AGD','{$GLOBALS['app_list_strings']['call_status_lead_dom']['AGD']}'),('5','RFS','{$GLOBALS['app_list_strings']['call_status_lead_dom']['RFS']}');";
    
                $GLOBALS['db']->query($query_insert_call_status_lead);
            }
    
            $query_2 = "SELECT COUNT(*) AS total  FROM call_status_description_lead";
            $result_2 = $GLOBALS['db']->query($query_2);
            $row_2 = $GLOBALS['db']->fetchByAssoc($result_2);
            $total_2 = $row_2['total'];
    
            if ($total_2 == 0) {
                $query_insert_call_status_description_lead = "INSERT INTO call_status_description_lead (id, name, description) VALUES ('1','01_NCT_Engaged','{$app_list_strings['call_status_description_lead_dom']['01_NCT_Engaged']}'), 
                                                                ('2','02_NCT_No_response','{$app_list_strings['call_status_description_lead_dom']['02_NCT_No_response']}'),
                                                                ('3','03_NCT_Not_available','{$app_list_strings['call_status_description_lead_dom']['03_NCT_Not_available']}'),
                                                                ('4','04_NCT_Relative_call_back','{$app_list_strings['call_status_description_lead_dom']['04_NCT_Relative_call_back']}'),
                                                                ('5','05_NCT_Relative_call_new','{$app_list_strings['call_status_description_lead_dom']['05_NCT_Relative_call_new']}'),
                                                                ('6','06_NCT_Invalid_number','{$app_list_strings['call_status_description_lead_dom']['06_NCT_Invalid_number']}'),
                                                                ('7','01_COT_Not_eligible_No_Card','{$app_list_strings['call_status_description_lead_dom']['01_COT_Not_eligible_No_Card']}'),
                                                                ('8','02_COT_Not_eligible_Wrong_Info','{$app_list_strings['call_status_description_lead_dom']['02_COT_Not_eligible_Wrong_Info']}'),
                                                                ('9','03_COT_Not_interested_Complain','{$app_list_strings['call_status_description_lead_dom']['03_COT_Not_interested_Complain']}'),
                                                                ('10','04_COT_Client_busy','{$app_list_strings['call_status_description_lead_dom']['04_COT_Client_busy']}'),
                                                                ('11','01_INT_no_money_in_card','{$app_list_strings['call_status_description_lead_dom']['01_INT_no_money_in_card']}'),
                                                                ('12','02_INT_Consider_Call_back','{$app_list_strings['call_status_description_lead_dom']['02_INT_Consider_Call_back']}'),
                                                                ('13','03_INT_Client_need_a_card','{$app_list_strings['call_status_description_lead_dom']['03_INT_Client_need_a_card']}'),
                                                                ('14','04_INT_Client_interest_but_no_pick_up','{$app_list_strings['call_status_description_lead_dom']['04_INT_Client_interest_but_no_pick_up']}'),
                                                                ('15','05_INT_Client_interest_but_no_pick_up','{$app_list_strings['call_status_description_lead_dom']['05_INT_Client_interest_but_no_pick_up']}'),
                                                                ('16','01_AGD_Approved_and_paid_money','{$app_list_strings['call_status_description_lead_dom']['01_AGD_Approved_and_paid_money']}'),
                                                                ('17','02_AGD_Schedules_Application_with_disbursement','{$app_list_strings['call_status_description_lead_dom']['02_AGD_Schedules_Application_with_disbursement']}'),
                                                                ('18','03_AGD_Agreed_but_still_not_contact','{$app_list_strings['call_status_description_lead_dom']['03_AGD_Agreed_but_still_not_contact']}'),
                                                                ('19','01_RFS_Refused_negative','{$app_list_strings['call_status_description_lead_dom']['01_RFS_Refused_negative']}'),
                                                                ('20','02_RFS_Refused_High_Rate','{$app_list_strings['call_status_description_lead_dom']['02_RFS_Refused_High_Rate']}'),
                                                                ('21','03_RFS_Refused_Loan_Amount','{$app_list_strings['call_status_description_lead_dom']['03_RFS_Refused_Loan_Amount']}'),
                                                                ('22','04_RFS_Refused_No_need','{$app_list_strings['call_status_description_lead_dom']['04_RFS_Refused_No_need']}');";
    
                $GLOBALS['db']->query($query_insert_call_status_description_lead);
            }
    
            $query_3 = "SELECT COUNT(*) AS total  FROM relationship_call_status_lead";
            $result_3 = $GLOBALS['db']->query($query_3);
            $row_3 = $GLOBALS['db']->fetchByAssoc($result_3);
            $total_3 = $row_3['total'];
    
            if ($total_3 == 0) {
                $query_relationship_call_status = "INSERT INTO relationship_call_status_lead (id, main_id, description_id) VALUES ('1','1','1'), ('2','1','2'), ('3','1','3'),('4','1','4'),('5','1','5'),('6','1','6'),('7','2','7'),('8','2','8'),('9','2','9'),('10','2','10'),('11','3','11'),('12','3','12'),('13','3','13'),('14','3','14'),('15','3','15'),('16','4','16'),('17','4','17'),('18','4','18'),('19','5','19'),('20','5','20'),('21','5','21'),('22','5','22');";
    
                $GLOBALS['db']->query($query_relationship_call_status);
            }
        }

        global $module_menu, $mod_strings, $sugar_config, $current_user;
        $asset = false;
        $result_access_override = 0;
        $user = BeanFactory::getBean('Users', $current_user->id);
        $id_employee = $user->id;
        $security_id_res = 0;
        $role="sale";
        $query_get_security = "SELECT securitygroup_id FROM securitygroups_users WHERE deleted = 0 AND user_id = '{$id_employee}'";
        $result_get_security = $GLOBALS['db']->query($query_get_security);
        if ($user->is_admin == 0){
            while($rows_get_security = $GLOBALS['db']->fetchByAssoc($result_get_security)){
                if ($asset == false){
                    $security_id = $rows_get_security['securitygroup_id'];
                    $query_get_role = "SELECT role_id FROM securitygroups_acl_roles WHERE deleted = 0 AND securitygroup_id = '{$security_id}'";
                    $result_get_role = $GLOBALS['db']->query($query_get_role);
                    if ($asset == false) {
                        while ($rows_get_role = $GLOBALS['db']->fetchByAssoc($result_get_role)) {
                            if ($asset == false) {
                                $role_id = $rows_get_role['role_id'];
                                $query_get_action = "SELECT action_id, access_override  FROM acl_roles_actions WHERE deleted = 0 AND role_id = '{$role_id}'";
                                $result_get_action = $GLOBALS['db']->query($query_get_action);
                                while ($rows_get_action = $GLOBALS['db']->fetchByAssoc($result_get_action)) {
                                    if ($rows_get_action['access_override'] != 0 && $rows_get_action['access_override'] != -99) {
                                        $action_id = $rows_get_action['action_id'];
                                        $query_get_name_action = "SELECT name, category FROM acl_actions WHERE deleted = 0 AND id = '{$action_id}'";
                                        $result_get_name_action = $GLOBALS['db']->query($query_get_name_action);
                                        while ($rows_get_name_action = $GLOBALS['db']->fetchByAssoc($result_get_name_action)) {
                                            if ($rows_get_name_action['name'] == 'divide' && $rows_get_name_action['category'] == 'Leads') {
                                                //echo $action_id;
                                                $result_access_override = $rows_get_action['access_override'];
                                                $asset = true;
                                                $security_id_res = $security_id;
                                                break;
                                            }
                                            if ($rows_get_name_action['name'] == 'disbursement' && $rows_get_name_action['category'] == 'Leads') {
                                                //echo $action_id;
                                                $role="disbursement";
                                            }
                                        }
                                    }
                                }
                            } else {
                                break;
                            }
                        }
                    }
                }
            }
        }
        else {
            $role = "admin";
        }
        if ($user->is_admin) {
            $cookie_name = "access_override_divide_lead";
            $cookie_value = 90;
            // Set the expiration date to one hour ago
            setcookie("action", "", time() - 3600);
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

            $cookie_name_1 = "role";
            $cookie_value_1 = $role;
            // Set the expiration date to one hour ago
            setcookie("role", "", time() - 3600);
            setcookie($cookie_name_1, $cookie_value_1, time() + (86400 * 30), "/");
        }
        else {
            $cookie_name = "access_override_divide_lead";
            $cookie_value = $result_access_override;
            // Set the expiration date to one hour ago
            setcookie("action", "", time() - 3600);
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

            $cookie_name_1 = "role";
            $cookie_value_1 = $role;
            // Set the expiration date to one hour ago
            setcookie("role", "", time() - 3600);
            setcookie($cookie_name_1, $cookie_value_1, time() + (86400 * 30), "/");
        }
    }

    function removeRecordDbLogicHook () {
        $query_1 = "SELECT COUNT(*) AS total  FROM call_status_lead";
        $result_1 = $GLOBALS['db']->query($query_1);
        $row_1 = $GLOBALS['db']->fetchByAssoc($result_1);
        $total_1 = $row_1['total'];

        if ($total_1 != 0) {
            $query_11 = "DELETE FROM call_status_lead";
            $GLOBALS['db']->query($query_11);
        }

        $query_2 = "SELECT COUNT(*) AS total  FROM call_status_description_lead";
        $result_2 = $GLOBALS['db']->query($query_2);
        $row_2 = $GLOBALS['db']->fetchByAssoc($result_2);
        $total_2 = $row_2['total'];

        if ($total_2 != 0) {
            $query_22 = "DELETE FROM call_status_description_lead";
            $GLOBALS['db']->query($query_22);
        }

        $query_3 = "SELECT COUNT(*) AS total  FROM relationship_call_status_lead";
        $result_3 = $GLOBALS['db']->query($query_3);
        $row_3 = $GLOBALS['db']->fetchByAssoc($result_3);
        $total_3 = $row_3['total'];

        if ($total_3 != 0) {
            $query_33 = "DELETE FROM call_status_description_lead";
            $GLOBALS['db']->query($query_33);
        }
    }
}
