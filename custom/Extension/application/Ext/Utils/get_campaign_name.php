<?php
function get_campaign_name() {
    $temp_result = array();
    $query = "SELECT id,name FROM campaigns WHERE deleted = 0 AND  id IN (SELECT DISTINCT campaign_id FROM leads WHERE deleted = 0)";
    $result = $GLOBALS['db']->query($query);
    while($row = $GLOBALS['db']->fetchByAssoc($result)){
        $temp_result[$row['id']] = $row['name'];
    }
    return $temp_result;
}