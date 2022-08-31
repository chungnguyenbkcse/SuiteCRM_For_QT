<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
// change <module_name> to real module name 
class CustomLeadViewEdit extends ViewEdit 
{
    public function display()
    {
        global $current_user;
        parent::display();
    }
}