<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/MVC/View/views/view.list.php');

class CustomLeadsViewallotted extends ViewList
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

    // Call function  _getModuleTitleParams( $show_help = true ) to custom title for new tab bar
    public function _getModuleTitleParams($show_help = true)
    {
        global $sugar_version, $sugar_flavor, $server_unique_key, $current_language, $action;
        //[logic here]ETCETCETC
        $params[] = $GLOBALS['app_strings']['LBL_ALLOTTED_CUSTOMER'];
        return $params;
    }

    public function listViewProcess()
    {
        include_once 'data/SugarBean.php';
        global $current_user;
        $user = BeanFactory::getBean('Users', $current_user->id);

        $cookie_name = "action";
        $cookie_value = "allotted";
        // Set the expiration date to one hour ago
        setcookie("action", "", time() - 3600);
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

        $user_id_current = $user->id;
        //global $current_user;
        $this->processSearchForm();
        if ($this->where != "") {
            $this->where .= " AND (leads.deleted = 0) AND (leads.assigned_user_id = '{$user_id_current}') ";
        } else {
            $this->where .= "(leads.assigned_user_id = '" . $user_id_current . "') AND (leads.deleted = 0)";
        }

        $this->lv->searchColumns = $this->searchForm->searchColumns;

        if (!$this->headers)
            return;

        if (empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false) {
            $this->lv->ss->assign("SEARCH", true);
            $this->lv->ss->assign('savedSearchData', $this->searchForm->getSavedSearchData());
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


            $this->lv->setup($this->seed, 'custom/modules/Leads/tpls/CustomListViewGeneric.tpl', $this->where, $this->params);
            $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
            // $this->lv->setup($this->seed, 'custom/modules/Leads/tpls/ListViewGeneric.tpl', $this->where, $this->params);
            echo $this->lv->display();
        }
    }
}
