<?php

$username = 'Holox'; // USERNAME FOR PANEL ACCESS
$password = 'test'; // PASSWORD FOR PANEL ACCESS

$connection = ssh2_connect('localhost', 22); // IP OF LINUX SERVER
ssh2_auth_password($connection, 'root', 'mot de passe'); // CONNECTION LOGS TO THE LINUX SERVER
?>
