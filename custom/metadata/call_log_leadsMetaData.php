<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['call_log_leads'] = array(
    'table' => 'call_log_leads', 'fields' => array(
        array('name' => 'id', 'type' => 'int', 'auto_increment' => true),
        array('name' => 'user_call_id', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'lead_id', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'call_date', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'call_status_id', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'description_call_status_id', 'type' => 'varchar', 'len' => '255'),
    ), 'indices' => array(
        array('name' => 'call_log_leadspk', 'type' => 'primary', 'fields' => array('id'))
    )
);