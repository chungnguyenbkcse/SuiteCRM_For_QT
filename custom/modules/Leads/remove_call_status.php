<?php
class HandleDB {
    function removeRecordDbLogicHook () {
        $query_1 = "SELECT COUNT(*) AS total  FROM call_status_lead";
        $result_1 = $GLOBALS['db']->query($query_1);
        $row_1 = $GLOBALS['db']->fetchByAssoc($result_1);
        $total_1 = $row_1['total'];

        //$query_login_date = "DELETE FROM date_login";
        //$GLOBALS['db']->query($query_login_date);

        if ($total_1 != 0) {
            $query_11 = "DELETE FROM call_status_lead";
            $GLOBALS['db']->query($query_11);
        }

        $query_2 = "SELECT COUNT(*) AS total  FROM call_status_description_lead";
        $result_2 = $GLOBALS['db']->query($query_2);
        $row_2 = $GLOBALS['db']->fetchByAssoc($result_2);
        $total_2 = $row_2['total'];

        if ($total_2 != 0) {
            $query_22 = "DELETE FROM call_status_description_lead";
            $GLOBALS['db']->query($query_22);
        }
    }
}
?>