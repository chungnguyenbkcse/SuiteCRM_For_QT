<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['call_status_description_lead'] = array(
    'table' => 'call_status_description_lead', 'fields' => array(
        array('name' => 'id', 'type' => 'varchar', 'len' => '36',),
        array('name' => 'name', 'type' => 'varchar', 'len' => '36'),
        array('name' => 'description', 'type' => 'varchar', 'len' => '255'),
    ), 'indices' => array(
        array('name' => 'call_status_description_leadpk', 'type' => 'primary', 'fields' => array('id'))
    )
);