<?php
session_start();
define("HOSTNAME",'localhost');
define("DBUSERNAME",'root');
define("DBPASSWORD",'');
define("DATABASENAME",'logistics');

$db = @mysql_connect(HOSTNAME,DBUSERNAME,DBPASSWORD);
mysql_select_db(DATABASENAME);






?>