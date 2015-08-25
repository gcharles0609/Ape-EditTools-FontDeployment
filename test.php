<?php
$utcServer = "uts3.timeinc.com";
$utcPort = "8080";
$utcUser = "fontdeploy";
$utcPassword = "Time2015";

echo 'sudo -u hamidb corecli -clientserver -login server='.$utcServer.' port='.$utcPort.' username='.$utcUser.' password='.$utcPassword;
$login = shell_exec('sudo -u hamidb corecli -clientserver -login server='.$utcServer.' port='.$utcPort.' username='.$utcUser.' password='.$utcPassword);
print_r ($login);
$workGroups = shell_exec('sudo -u hamidb corecli -clientserver -getWorkgroups');
//$workGroups = shell_exec('sudo ./getWorkgroups.sh');
print_r ($workGroups);
?>
