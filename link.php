<?php
    session_start();
    /*	create/update "data/status.json" */
    if($_GET["check"] == true){
        $filename = "data/status.json";
        date_default_timezone_set("Asia/Kolkata");
        $dt = date("Y-m-d h:i:s A");
        $tmp = "[{\"date\": \"".$dt."\", \"ip\": \"".$_SERVER['REMOTE_ADDR']."\", \"referer\": \"".$_SERVER['HTTP_REFERER']."\", \"useragent\": \"".$_SERVER['HTTP_USER_AGENT']."\"}]";
        $file = fopen($filename,"w");
        fwrite($file,$tmp);
        fclose($file);
    }
