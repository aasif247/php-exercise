<?php
session_name("mySession");
session_start([
     'cookie_domain' =>'.maindomain.com',
     'cookie_path' => '/'
]);
$_SESSION['data'] ="Hello Java";
echo $_SESSION['data'];