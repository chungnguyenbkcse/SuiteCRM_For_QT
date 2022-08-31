<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 

$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Leads push feed', 'modules/Leads/SugarFeeds/LeadFeed.php','LeadFeed', 'pushFeed'); 
$hook_array['before_save'][] = Array(10, 'Quantity leads', 'custom/modules/Leads/save_quantity_lead.php','save_quantity_lead', 'before_save_quantity_lead'); 
$hook_array['before_save'][] = Array(77, 'updateGeocodeInfo', 'modules/Leads/LeadsJjwg_MapsLogicHook.php','LeadsJjwg_MapsLogicHook', 'updateGeocodeInfo'); 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'Leads call log', 'custom/modules/Leads/call_log_leads.php','call_log_leads', 'after_save_call_log_leads'); 
$hook_array['after_save'][] = Array(77, 'updateRelatedMeetingsGeocodeInfo', 'modules/Leads/LeadsJjwg_MapsLogicHook.php','LeadsJjwg_MapsLogicHook', 'updateRelatedMeetingsGeocodeInfo'); 
$hook_array['before_delete'] = Array();
$hook_array['before_delete'][] = Array(1, 'Delete record in table call_log_leads and quantity_leads', 'custom/modules/Leads/before_delete_lead_handle.php', 'before_delete_lead_handle', 'before_delete_lead_handle');


?>