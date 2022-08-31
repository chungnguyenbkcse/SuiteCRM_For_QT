<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['relationship_call_status_lead'] = array(
        'table' => 'relationship_call_status_lead', 
        'fields' => array(
            array('name' => 'id', 'type' => 'varchar', 'len' => '36',),
            array('name' => 'main_id', 'type' => 'varchar', 'len' => '36'),
            array('name' => 'description_id', 'type' => 'varchar', 'len' => '36'),
        ), 
        'indices' => array(
            array('name' => 'relationship_call_status_leadpk', 'type' => 'primary', 'fields' => array('id')), 
            array('name' =>'idx_main', 'type' =>'index', 'fields'=>array('main_id')),
            array('name' =>'idx_description', 'type' =>'index', 'fields'=>array('description_id')),     
            array('name' => 'idx_main_description', 'type'=>'alternate_key', 'fields'=>array('main_id','description_id'))
        ),
        'relationships' => array('relationship_call_status_lead' => array(
            'lhs_table' => 'call_status_lead', 'lhs_key' => 'id',
            'rhs_table' => 'call_status_description_lead', 'rhs_key' => 'id',
            'relationship_type' => 'one-to-many',
            'join_table' => 'relationship_call_status_lead', 'join_key_lhs' => 'main_id', 'join_key_rhs' => 'description_id'
        ))
    );