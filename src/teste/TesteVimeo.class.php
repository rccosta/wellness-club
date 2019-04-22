<?php

require_once '../../Config.php';

error_reporting(E_ALL);
ini_set('display_errors', 'On');

use Vimeo\Vimeo;

$client = new Vimeo("592aab3ec7aac0a0de1a67f4faf7365151e789fb", "jMP9OKTq5t9t4RIIR9AZgaimnqRpbLEalrisYUkytFzeWBUVfUMx0d8QbW4DyupmIpu5CfxHTNpTAWJk/Btg5Xv/DYG/1oBg5MnuiT2WCzcfp1wZKhlqlCU+hC8G98wf", "cff72c5cb16af2c6cecace3c98ddae50");

//$response = $client->request('/me/videos/', array(), 'GET');

$response = $client->request('/me/projects/', array(), 'GET');

$body = $response['body'];
$data = $body['data'];
foreach ($data as $video) {
    echo $video['name'];
}
//print_r($response);