<?php
function getGroupSecurity() {
    global $db;
        
    $query = "SELECT id, name FROM securitygroups";

    $result = $db->query($query, false);

    $list = array('' => 'Select');
    while (($row = $db->fetchByAssoc($result)) != null) {
        $list[$row['id']] = $row['name'];
    }
    
    return $list;
}