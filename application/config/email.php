<?php defined('BASEPATH') or exit('No direct script access allowed');

// Add custom values by settings them to the $config array.
// Example: $config['smtp_host'] = 'smtp.gmail.com';
// @link https://codeigniter.com/user_guide/libraries/email.html

$config['useragent'] = 'IMDRI';
$config['protocol'] = 'smtp'; // or 'smtp'
$config['mailtype'] = 'html'; // or 'text'
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_user'] = 'imdri.autoenvio@gmail.com';
$config['smtp_pass'] = 'IMDRI1234';
$config['smtp_crypto'] = 'ssl'; // or 'tls'
$config['smtp_port'] = 465;
