<?php

use function PHPSTORM_META\type;

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['leads_card_image'] = array(
    'table' => 'leads_card_image', 'fields' => array(
        array('name' => 'id', 'type' => 'int', 'auto_increment' => true),
        array('name' => 'lead_id', 'type' => 'varchar', 'len' => '255'),
        array('name' => 'card_image_link', 'type' => 'varchar', 'len' => '255'),
    ), 'indices' => array(
        array('name' => 'leads_card_imagepk', 'type' => 'primary', 'fields' => array('id'))
    )
);