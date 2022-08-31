<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 

$hook_version = 1; 
$hook_array = Array(); 
$hook_array['before_delete'] = Array();
$hook_array['before_delete'][] = Array(1, 'Delete record in table call_log_leads and quantity_leads', 'custom/modules/Campaigns/before_delete_lead_handle.php', 'before_delete_campaign_handle', 'before_delete_campaign_handle');