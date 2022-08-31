<?php

use function PHPSTORM_META\type;

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['quantity_leads'] = array(
    'table' => 'quantity_leads', 'fields' => array(
        array('name' => 'id', 'type' => 'int', 'auto_increment' => true),
        array('name' => 'user_id', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'campaign_id', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'quantity_assigned', 'type' => 'int' ),
        array('name' => 'quantity_to_cancel', 'type' => 'int' ),
        array('name' => 'date_modified', 'type' => 'varchar', 'len' => '255'),

    ), 'indices' => array(
        array('name' => 'quantity_leadspk', 'type' => 'primary', 'fields' => array('id'))
    )
);