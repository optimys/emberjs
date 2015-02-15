<?php
require_once('sphinxapi.php');
// Instantiate the sphinx client
$client = new SphinxClient();
// Set search options
$client->SetServer('localhost', 9312);
$client->SetConnectTimeout(1);
$client->SetArrayResult(true);
// Query the index
$results = $client->Query('php');
// Output the matched results in raw format
echo "<pre>";
print_r($results['matches']);
echo "</pre>";