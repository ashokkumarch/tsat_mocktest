<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.eu.mailgun.org';
$config['smtp_port'] = '587'; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.
$config['smtp_crypto'] = 'tls';
$config['smtp_user'] = 'postmaster@emails.canteenkw.com';
$config['smtp_pass'] = '441d09de270580c3019ac043e74edc4a-aff2d1b9-499510b1';
$config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
$config['newline'] = "rn";
?>