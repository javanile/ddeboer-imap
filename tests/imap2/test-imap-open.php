<?php

require_once __DIR__.'/../../vendor/autoload.php';

$username = 'francescobianco@opencrmitalia.com';
#$password = 'Pass2019!!!Top';
$password = 'token';
$mailbox = "{outlook.office365.com:993/imap/ssl/novalidate-cert/authuser=$username/user=$username}";

$imap = imap_open($mailbox, $username, $password, OP_XOAUTH2);

$errors = imap_errors();

if ($errors) {
var_dump($errors);
die();
}


$numberOfMessages = imap_num_msg($imap);