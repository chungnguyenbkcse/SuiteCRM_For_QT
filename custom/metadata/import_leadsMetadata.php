<?php

use function PHPSTORM_META\type;

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['import_leads'] = array(
    'table' => 'import_leads', 'fields' => array(
        array('name' => 'id', 'type' => 'int', 'auto_increment' => true),
        array('name' => 'date_updated', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'date_post', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'user_updated', 'type' => 'varchar', 'len' => '255' ),
        array('name' => 'id_user_updated', 'type' => 'varchar', 'len' => '255' ),
        array('name' => 'link_file', 'type' => 'varchar', 'len' => '255' ),
        array('name' => 'number_import_in_day', 'type' => 'int'),
    ), 'indices' => array(
        array('name' => 'import_leadspk', 'type' => 'primary', 'fields' => array('id'))
    )
);