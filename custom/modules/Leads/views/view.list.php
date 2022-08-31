<?php
global $module_menu, $mod_strings, $sugar_config, $current_user;
$asset_disbursement = false;
$result_access_override_disbursement = 0;
$user = BeanFactory::getBean('Users', $current_user->id);
$id_employee = $user->id;
$security_id_res_disbursement = 0;
$query_get_security_disbursement = "SELECT securitygroup_id FROM securitygroups_users WHERE deleted = 0 AND user_id = '{$id_employee}'";
$result_get_security_disbursement = $GLOBALS['db']->query($query_get_security_disbursement);
if ($user->is_admin == 0) {
    while ($rows_get_security_disbursement = $GLOBALS['db']->fetchByAssoc($result_get_security_disbursement)) {
        if ($asset_disbursement == false) {
            $security_id_disbursement = $rows_get_security_disbursement['securitygroup_id'];
            $query_get_role_disbursement = "SELECT role_id FROM securitygroups_acl_roles WHERE deleted = 0 AND securitygroup_id = '{$security_id_disbursement}'";
            $result_get_role_disbursement = $GLOBALS['db']->query($query_get_role_disbursement);
            if ($asset_disbursement == false) {
                while ($rows_get_role_disbursement = $GLOBALS['db']->fetchByAssoc($result_get_role_disbursement)) {
                    if ($asset_disbursement == false) {
                        $role_id_disbursement = $rows_get_role_disbursement['role_id'];
                        $query_get_action_disbursement = "SELECT action_id, access_override  FROM acl_roles_actions WHERE deleted = 0 AND role_id = '{$role_id_disbursement}'";
                        $result_get_action_disbursement = $GLOBALS['db']->query($query_get_action_disbursement);
                        while ($rows_get_action_disbursement = $GLOBALS['db']->fetchByAssoc($result_get_action_disbursement)) {
                            if ($rows_get_action_disbursement['access_override'] != 0 && $rows_get_action_disbursement['access_override'] != -99) {
                                $action_id_disbursement = $rows_get_action_disbursement['action_id'];
                                $query_get_name_action_disbursement = "SELECT name, category FROM acl_actions WHERE deleted = 0 AND id = '{$action_id_disbursement}'";
                                $result_get_name_action_disbursement = $GLOBALS['db']->query($query_get_name_action_disbursement);
                                while ($rows_get_name_action_disbursement = $GLOBALS['db']->fetchByAssoc($result_get_name_action_disbursement)) {
                                    if ($rows_get_name_action_disbursement['name'] == 'disbursement' && $rows_get_name_action_disbursement['category'] == 'Leads') {
                                        //echo $action_id;
                                        $result_access_override_disbursement = $result_access_override_disbursement['access_override'];
                                        $asset_disbursement = true;
                                        $security_id_res_disbursement = $security_id_disbursement;
                                        break;
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

if ($asset_disbursement == true) {

    require_once('include/MVC/View/views/view.list.php');
    $GLOBALS['log']->fatal("disbursement");
    class CustomLeadsViewList extends ViewList
    {
        /*     public function display()
    {
        $this->getLeadAssignForUser();
        $this->params['custom_where'] = ' AND module_name.name = "user" ';
        parent::display();
    }  */

        /* function preDisplay(){
        parent::preDisplay();
    } */

        public function _getModuleTitleParams($show_help = true)
        {
            global $sugar_version, $sugar_flavor, $server_unique_key, $current_language, $action;
            //[logic here]ETCETCETC
            $params[] = $GLOBALS['mod_strings']['LBL_DISBURSEMENT'];
            return $params;
        }

        public function listViewProcess()
        {
            include_once 'data/SugarBean.php';
            global $current_user;
            $user = BeanFactory::getBean('Users', $current_user->id);

            $cookie_name = "action";
            $cookie_value = "index";
            // Set the expiration date to one hour ago
            setcookie("action", "", time() - 3600);
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

            $user_id_current = $user->id;
            //global $current_user;
            $this->processSearchForm();
            if ($this->where != "") {
                $this->where .= "AND (leads.deleted = 0) AND leads.call_status_lead = '4' AND (leads.campaign_id IS NOT NULL) AND (leads.campaign_id != '')";
            } else {
                $this->where .= "(leads.deleted = 0) AND (leads.call_status_lead = '4') AND (leads.campaign_id IS NOT NULL) AND (leads.campaign_id != '')";
            }

            $this->lv->searchColumns = $this->searchForm->searchColumns;

            if (!$this->headers)
                return;

            if (empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false) {
                $this->lv->ss->assign("SEARCH", true);
                $this->lv->ss->assign('savedSearchData', $this->searchForm->getSavedSearchData());
                //print_r(($this->searchForm->getSavedSearchData())['selected']);
                $query_saved_search_users = "SELECT * FROM saved_search_users WHERE deleted = '0'";
                $result_saved_search_users = $GLOBALS['db']->query($query_saved_search_users);
                $lst = array();
                $options = array();
                while ($rows = $GLOBALS['db']->fetchByAssoc($result_saved_search_users)) {
                    # code...
                    $options[$rows['saved_search_id']] = $rows['name'];
                }
                if ($user->is_admin == 0) {
                    $lst['hasOptions'] = 1;
                } else {
                    $lst['hasOptions'] = 0;
                }
                $lst['options'] = $options;
                $lst['selected'] = "";
                //print_r($lst);
                $this->lv->ss->assign('savedSearchDataAdmin', $lst);
                $this->lv->setup($this->seed, 'custom/modules/Leads/tpls/ListViewGeneric.tpl', $this->where, $this->params);
                echo $this->lv->display();
            }
        }
    }
} 

else  {
    require_once('include/MVC/View/views/view.list.php');
    require_once('modules/Leads/LeadsListViewSmarty.php');

    class CustomLeadsViewList extends ViewList
    {
        public function handleGetUserChild($parent_id, $list_child) {
            //echo "Enter {$parent_id}";
            $query_security_group = "SELECT * FROM securitygroups WHERE assigned_user_id = '{$parent_id}'";
            $result_security_group = $GLOBALS['db']->query($query_security_group);
            $list_child[] = $parent_id;
            while($rows = $GLOBALS['db']->fetchByAssoc($result_security_group)){
                //$GLOBALS['log']->fatal("Child group");
                $id = $rows['id'];
                
                $query_user_in_group = "SELECT user_id FROM securitygroups_users WHERE securitygroup_id = '{$id}'";
                $result_query_user_in_group = $GLOBALS['db']->query($query_user_in_group);
                while($rows_1 = $GLOBALS['db']->fetchByAssoc($result_query_user_in_group)){
                    $child_id = $rows_1['user_id'];
                    $list_child = $this->handleGetUserChild($child_id, $list_child);
                }
            }
            return $list_child;
        }
        public function listViewProcess()
        {
            global $current_user;
            $user = BeanFactory::getBean('Users', $current_user->id);

            $cookie_name = "action";
            $cookie_value = "index";
            // Set the expiration date to one hour ago
            setcookie("action", "", time() - 3600);
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

            $this->processSearchForm();
            $this->lv->searchColumns = $this->searchForm->searchColumns;

            global $module_menu, $mod_strings, $sugar_config, $current_user;
            $asset_disbursement = false;
            $result_access_override_disbursement = 0;
            $user = BeanFactory::getBean('Users', $current_user->id);
            $id_employee = $user->id;
            $security_id_res_disbursement = 0;
            $query_get_security_disbursement = "SELECT securitygroup_id FROM securitygroups_users WHERE deleted = 0 AND user_id = '{$id_employee}'";
            $result_get_security_disbursement = $GLOBALS['db']->query($query_get_security_disbursement);
            if ($user->is_admin == 0) {
                while ($rows_get_security_disbursement = $GLOBALS['db']->fetchByAssoc($result_get_security_disbursement)) {
                    if ($asset_disbursement == false) {
                        $security_id_disbursement = $rows_get_security_disbursement['securitygroup_id'];
                        $query_get_role_disbursement = "SELECT role_id FROM securitygroups_acl_roles WHERE deleted = 0 AND securitygroup_id = '{$security_id_disbursement}'";
                        $result_get_role_disbursement = $GLOBALS['db']->query($query_get_role_disbursement);
                        if ($asset_disbursement == false) {
                            while ($rows_get_role_disbursement = $GLOBALS['db']->fetchByAssoc($result_get_role_disbursement)) {
                                if ($asset_disbursement == false) {
                                    $role_id_disbursement = $rows_get_role_disbursement['role_id'];
                                    $query_get_action_disbursement = "SELECT action_id, access_override  FROM acl_roles_actions WHERE deleted = 0 AND role_id = '{$role_id_disbursement}'";
                                    $result_get_action_disbursement = $GLOBALS['db']->query($query_get_action_disbursement);
                                    while ($rows_get_action_disbursement = $GLOBALS['db']->fetchByAssoc($result_get_action_disbursement)) {
                                        if ($rows_get_action_disbursement['access_override'] != 0 && $rows_get_action_disbursement['access_override'] != -99) {
                                            $action_id_disbursement = $rows_get_action_disbursement['action_id'];
                                            $query_get_name_action_disbursement = "SELECT name, category FROM acl_actions WHERE deleted = 0 AND id = '{$action_id_disbursement}'";
                                            $result_get_name_action_disbursement = $GLOBALS['db']->query($query_get_name_action_disbursement);
                                            while ($rows_get_name_action_disbursement = $GLOBALS['db']->fetchByAssoc($result_get_name_action_disbursement)) {
                                                if ($rows_get_name_action_disbursement['name'] == 'list' && $rows_get_name_action_disbursement['category'] == 'Leads') {
                                                    //echo $action_id;
                                                    $result_access_override_disbursement = $rows_get_action_disbursement['access_override'];
                                                    $asset_disbursement = true;
                                                    $security_id_res_disbursement = $security_id_disbursement;
                                                    //echo $result_access_override_disbursement;
                                                    break;
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
            $GLOBALS['log']->fatal("Access Override");
            $GLOBALS['log']->fatal($result_access_override_disbursement);
            if ($result_access_override_disbursement == 96){
                //$this->handleGetUserChild($list_child);
                //print_r($this->handleGetUserChild($id_employee, []));
                $GLOBALS['log']->fatal("Enter Access Override 96");
                if ($this->where == ""){
                    foreach ($this->handleGetUserChild($id_employee, []) as $key => $value) {
                        if ($key == 0){
                            $this->where .= "leads.created_by = '{$value}' OR leads.assigned_user_id = '{$value}'";
                        }
                        else {
                            $this->where .= " OR leads.created_by = '{$value}' OR leads.assigned_user_id = '{$value}'";
                        }
                    }
                }
                else {
                    foreach ($this->handleGetUserChild($id_employee, []) as $key => $value) {
                        if ($key == 0){
                            $this->where .= " AND (leads.created_by = '{$value}' OR leads.assigned_user_id = '{$value}'";
                        }
                        else {
                            $this->where .= " OR leads.created_by = '{$value}' OR leads.assigned_user_id = '{$value}'";
                        }
                    }
                    $this->where .= ")";
                }
            
            } 

            if (!$this->headers) {
                return;
            }
            if (empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false) {
                $this->lv->ss->assign("SEARCH", true);
                $this->lv->ss->assign('savedSearchData', $this->searchForm->getSavedSearchData());
                //print_r(($this->searchForm->getSavedSearchData())['selected']);
                $query_saved_search_users = "SELECT * FROM saved_search_users WHERE deleted = '0'";
                $result_saved_search_users = $GLOBALS['db']->query($query_saved_search_users);
                $lst = array();
                $options = array();
                while ($rows = $GLOBALS['db']->fetchByAssoc($result_saved_search_users)) {
                    # code...
                    $options[$rows['saved_search_id']] = $rows['name'];
                }
                if ($user->is_admin == 0) {
                    $lst['hasOptions'] = 1;
                } else {
                    $lst['hasOptions'] = 0;
                }
                $lst['options'] = $options;
                $lst['selected'] = "";
                //print_r($lst);
                $this->lv->ss->assign('savedSearchDataAdmin', $lst);

                $GLOBALS['log']->fatal("WHERE: ");
                $GLOBALS['log']->fatal($this->where);
                $this->lv->setup($this->seed, 'custom/modules/Leads/tpls/CustomListViewGeneric.tpl', $this->where, $this->params);
                $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
                echo $this->lv->display();
            }
        }

        /**
         * @see ViewList::preDisplay()
         */
        public function preDisplay()
        {
            require_once('modules/AOS_PDF_Templates/formLetter.php');
            formLetter::LVPopupHtml('Leads');
            parent::preDisplay();

            $this->lv = new LeadsListViewSmarty();
        }
    }
}
