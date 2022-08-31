<?php 
 //WARNING: The contents of this file are auto-generated


$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_login'] = Array(); 
$hook_array['after_login'][] = Array(1, 'Add record for db call status', 'custom/modules/Leads/handle_db.php','HandleDB', 'addRecordDbLogicHook'); 

$hook_array['before_logout'] = Array(); 
$hook_array['before_logout'][] = Array(77, 'Remove record for db call status', 'custom/modules/Leads/remove_call_status.php','HandleDB', 'removeRecordDbLogicHook'); 
?>