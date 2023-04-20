<?php
require_once '../vendor/autoload.php';
require_once '../wp-config.php';

$KML = new \Kodols\MySQL\Library;
$config = $KML->newConfiguration();
$config->setHostname(DB_HOST);
$config->setUsername(DB_USER);
$config->setPassword(DB_PASSWORD);
$config->setDatabase(DB_NAME);
$KML->attachConfiguration($config);
/*
 * Get the server object
 */
$db = $KML->connect();
$insert_id = $db->insert('user_questions', [
    'full_name' => $_POST['username'],
    'bith_date' => $_POST['birth_year'].'-'.$_POST['birth_month'].'-'.$_POST['birth_day'].' '.$_POST['birth_hour'].':'.$_POST['birth_min'].':00',
    'birth_country' => $_POST['birth_country'],
    'birth_town' => $_POST['birth_town'],
    'aspects' => $_POST['aspects'],
    'created_at' => date('Y-m-d H:i:s'),
]);
echo $insert_id;


