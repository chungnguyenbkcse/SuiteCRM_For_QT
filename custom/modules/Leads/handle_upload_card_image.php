<?php
require_once('include/upload_file.php');
global $sugar_config;
$siteUrl = $sugar_config['url_web'];
$lead_id = $_POST['lead_id'];
// handle uploaded file
if (isset($_FILES['files']) && !empty($_FILES['files'])) {
    $no_files = count($_FILES["files"]['name']);
    $query_total_card_image = "SELECT COUNT(*) AS total FROM leads_card_image WHERE lead_id = '{$lead_id}'";
    $result_total_card_image = $GLOBALS['db']->query($query_total_card_image);
    $total_card_image = $GLOBALS['db']->fetchByAssoc($result_total_card_image);
    if ($total_card_image['total'] > 0){
        $query_delete_card_image = "DELETE FROM leads_card_image WHERE lead_id = '{$lead_id}'";
        $GLOBALS['db']->query($query_delete_card_image);
    }
    for ($i = 0; $i < $no_files; $i++) {
        if ($_FILES["files"]["error"][$i] > 0) {
            echo "Error: " . $_FILES["files"]["error"][$i] . "<br>";
        } else {
            if (file_exists('upload/' . $_FILES["files"]["name"][$i])) {
                $link_url_file = $siteUrl . '/upload/' . $_FILES["files"]["name"][$i];
                $query = "INSERT INTO leads_card_image (lead_id, card_image_link) VALUES ('{$lead_id}', '{$link_url_file}')";
                $GLOBALS['db']->query($query);
                echo 'File already exists : upload/' . $_FILES["files"]["name"][$i];
            } else {
                move_uploaded_file($_FILES["files"]["tmp_name"][$i], 'upload/' . $_FILES["files"]["name"][$i]);
                $link_url_file = $siteUrl . '/upload/' . $_FILES["files"]["name"][$i];
                $query = "INSERT INTO leads_card_image (lead_id, card_image_link) VALUES ('{$lead_id}', '{$link_url_file}')";
                $GLOBALS['db']->query($query);
                echo 'File successfully uploaded : upload/' . $_FILES["files"]["name"][$i] . ' and lead_id: '. $lead_id;
            }
        }
    }
}
else {
    echo 'Please choose at least one file';
}