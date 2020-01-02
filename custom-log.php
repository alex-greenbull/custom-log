<?php
/*
* Created Date: Thursday, September 12th 2019, 2:30:43 pm
* Author: Alex Vidal
* -----
* Last Modified: Thu Jan 01 2020
* Modified By: Alex Vidal
* -----
* Copyright (c) 2019 KVDC
* Description : Write to a custom log
*/
function custom_logs($message) {
    if(is_array($message)) {
        $message = json_encode($message);
    }
    $file = fopen(WPMU_PLUGIN_DIR . "/custom_logs.log","a");
    echo fwrite($file, "\n" . date('Y-m-d h:i:s') . " :: " . $message);
    fclose($file);
} ;

//custom_logs("Hey! I am in a header");