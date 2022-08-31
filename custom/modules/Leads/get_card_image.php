<?php
global $mod_strings, $current_user;
$html = "";
$id_lead = $_GET['id'];

$query_card_image = "SELECT * FROM leads_card_image WHERE lead_id = '{$id_lead}'";
$result_card_image = $GLOBALS['db']->query($query_card_image);
$lst = array();
while($card_image = $GLOBALS['db']->fetchByAssoc($result_card_image)){
    $lst[]  = $card_image;
}

echo json_encode($lst);


