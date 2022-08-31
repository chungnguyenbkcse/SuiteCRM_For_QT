<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
$hook_version = 1; 
$hook_array = Array(); 

$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Save search users', 'custom/modules/SavedSearch/before_saved_search_users.php','before_saved_search_users', 'before_saved_search_users'); 

$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'Save search users', 'custom/modules/SavedSearch/saved_search_users.php','saved_search_users', 'saved_search_users'); 
?>