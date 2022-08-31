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


class before_saved_search_users
{
    public $module = 'SavedSearch';
    public function before_saved_search_users($bean, $event, $arguments)
    {
        global $current_user;
        $user = BeanFactory::getBean('Users', $current_user->id);
        $user_id = $current_user->id;
        $saved_search_id = $bean->id;
        $content = $bean->contents;
        $description = $bean->description;
        $search_module = $bean->search_module;
        $name = $bean->name;
        $deleted = 0;

        $query_saved_search_users = "SELECT COUNT(*) AS total FROM saved_search_users WHERE saved_search_id = '{$bean->id}' AND deleted = '0'";
        $result_saved_search_users = $GLOBALS['db']->query($query_saved_search_users);
        $total = $GLOBALS['db']->fetchByAssoc($result_saved_search_users);

        if ($user->is_admin == 1  && $bean->search_module == "Leads"){
            if ($total['total'] == 0){
                $query = "INSERT INTO saved_search_users (user_id, saved_search_id, assigned_user_id, deleted, name, search_module, date_entered, date_modified, contents, description) VALUES ('{$user_id}', '{$saved_search_id}', '{$user_id}', '{$deleted}', '{$bean->name}', '{$bean->search_module}', '{$bean->date_entered}', '{$bean->date_modified}', '{$bean->contents}', '{$bean->description}')";
                $GLOBALS['db']->query($query);        
            }
            else {
                $query = "UPDATE saved_search_users SET user_id = '{$user_id}', saved_search_id = '{$saved_search_id}', assigned_user_id = '{$user_id}', deleted = '{$deleted}', name = '{$bean->name}', search_module = '{$bean->search_module}', date_modified = '{$bean->date_modified}', contents = '{$bean->contents}', description = '{$bean->description}' WHERE saved_search_id = '{$bean->id}'";
                $GLOBALS['db']->query($query); 
            }
        }

        else if ($total['total'] != 0 && $user->is_admin == 0  && $bean->search_module == "Leads"){
            $savedSearchBean = BeanFactory::newBean('SavedSearch');
            $savedSearchBean->name = $name;
            $savedSearchBean->search_module = $search_module;
            $savedSearchBean->assigned_user_id = $user->id;
            $savedSearchBean->contents = $content;
            $savedSearchBean->description = $description;
            $savedSearchBean->save();
        }
    }
}