<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['saved_search_users'] = array(
    'table' => 'saved_search_users', 'fields' => array(
        array('name' => 'id', 'type' => 'int', 'auto_increment' => true),
        array('name' => 'user_id', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'saved_search_id', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'name', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'search_module', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'contents', 'type' => 'text'),
        array('name' => 'description', 'type' => 'text'),
        array('name' => 'assigned_user_id', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'date_entered', 'type' => 'datetime'),
        array('name' => 'date_modified', 'type' => 'datetime'),
        array('name' => 'deleted', 'type' => 'bool', 'len' => '1', 'default' => '0', 'required' => true)
    ), 'indices' => array(
        array('name' => 'saved_search_userspk', 'type' => 'primary', 'fields' => array('id'))
    )
);