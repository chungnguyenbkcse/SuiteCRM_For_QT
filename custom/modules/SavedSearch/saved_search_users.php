<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */


class saved_search_users
{
    public $module = 'SavedSearch';
    public function saved_search_users($bean, $event, $arguments)
    {
        global $current_user;
        $user = BeanFactory::getBean('Users', $current_user->id);

        $query_saved_search_users = "SELECT COUNT(*) AS total FROM saved_search_users WHERE saved_search_id = '{$bean->id}'";
        $result_saved_search_users = $GLOBALS['db']->query($query_saved_search_users);
        $total = $GLOBALS['db']->fetchByAssoc($result_saved_search_users);

        if ($total['total'] != 0 && $user->is_admin == 0   && $bean->search_module == "Leads"){
            $query_saved_search_user = "SELECT * FROM saved_search_users WHERE saved_search_id = '{$bean->id}' AND deleted = '0'";
            $result_saved_search_user = $GLOBALS['db']->query($query_saved_search_user);
            $saved_search_user = $GLOBALS['db']->fetchByAssoc($result_saved_search_user);
            $name = $saved_search_user['name'];
            $contents = $saved_search_user['contents'];
            $description = $saved_search_user['description'];
            $search_module = $saved_search_user['search_module'];
            $deleted = $saved_search_user['deleted'];
            $date_entered = $saved_search_user['date_entered'];
            $date_modified = $saved_search_user['date_modified'];
            $assigned_user_id = $saved_search_user['assigned_user_id'];

            $query_saved_search = "UPDATE saved_search SET name='{$name}',search_module = '{$search_module}',deleted = '0',date_entered = '{$date_entered}', date_modified = '{$date_modified}', contents = '{$contents}', description = '{$description}' ,assigned_user_id = '{$assigned_user_id}' WHERE id = '{$bean->id}'";
            $GLOBALS['db']->query($query_saved_search);
        }
        /* else {
            SugarApplication::redirect("index.php?action=index&module=Leads&saved_search_select={$bean->id}&saved_search_select_name={$bean->name}&orderBy=NAME&sortOrder=ASC&query=true&searchFormTab=advanced_search&showSSDIV=no");
        } */
    }
}