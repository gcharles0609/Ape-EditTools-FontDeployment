<?php
$utcServer = "uts3.timeinc.com";
$utcPort = "8080";
$utcUser = "fontdeploy";
$utcPassword = "Time2015";

shell_exec('sudo corecli -clientserver -login server='.$utcServer.' port='.$utcPort.' username='.$utcUser.' password='.$utcPassword);
$workGroups = shell_exec('sudo corecli -clientserver -getWorkgroups');
print_r ($workGroups);
?>
