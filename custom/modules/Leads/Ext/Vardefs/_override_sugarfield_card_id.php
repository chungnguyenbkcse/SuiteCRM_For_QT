<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
$dictionary['Lead']['fields']['card_id'] = array (
	'name' => 'card_id',
    'type' => 'id',
    'reportable' => false,
    'vname' => 'LBL_CARD_ID',
    'comment' => 'Card Id of lead',
    'module' => 'Lead',
);

VardefManager::createVardef('Leads', 'Lead', array('default', 'assignable', 'security_groups',
    'person'));