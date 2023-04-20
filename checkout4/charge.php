<?php
require_once '../vendor/autoload.php';
require_once '../wp-config.php';
// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
\Stripe\Stripe::setApiKey('sk_test_51MoOFsKuZdcMdc5tI0sASY2shmMzxe5BI9qRYPbnNsB6fJZNtytxlnXTwrdIFI4Cvou134uCzV44YAshh5Ln4l1I00M9mpEAXn');

// Token is created using Stripe Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];
$amount = $_POST['amount'];
$charge = \Stripe\Charge::create([
    'amount' => $amount*100,
    'currency' => 'usd',
    'description' => 'Astrology checkout',
    'source' => $token,
]);

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
$contact_id = $db->insert('user_contacts', [
    'f_name' => $_POST['f_name'],
    'l_name' => $_POST['l_name'],
    'email' => $_POST['email'],
    'street' => $_POST['street'],
    'town' => $_POST['town'],
    'province' => $_POST['province'],
    'postal_code' => $_POST['postal_code'],
    'country' => $_POST['country'],
    'apartment' => $_POST['apartment'],
    'question_id' => $_POST['question_id'],
    'created_at' => date('Y-m-d H:i:s'),
]);
$transaction_id = $db->insert('transactions', [
    'f_name' => $_POST['f_name'],
    'l_name' => $_POST['l_name'],
    'email' => $_POST['email'],
    'amount' => $amount,
    'ref_url' => $charge->receipt_url,
    'result' => $charge->status,
    'created_at' => date('Y-m-d H:i:s'),
    'description' => 'Astrology checkout',
    'payment_id' => $charge->id,
    'tariff' => $_POST['tariff'],
    'contact_id'=> $contact_id
]);

echo "<script>alert('success!'); location.href='/'</script>";


