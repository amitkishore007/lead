<?php 

defined("DB_HOST") ? null : define("DB_HOST",'localhost' );
defined("DB_USER") ? null : define("DB_USER",'root');
defined("DB_NAME") ? null : define("DB_NAME",'world');
defined("DB_PASS") ? null : define("DB_PASS",'');

$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(!$db){
    
    die("unable to connect to database ".mysqli_connect_error());
    
} 