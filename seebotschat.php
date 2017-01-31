#!/usr/bin/env php
<?php

require_once(__DIR__."/vendor/autoload.php");
require_once(__DIR__."/config.php");

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'https://cleverbot.io/1.0/'
]);

$client->request('post', 'create', [
    "form_params" => [
        "user" => $config['user'],
        "key" => $config['key'],
        "nick" => $config['names'][0]
    ]
]);

$client->request('post', 'create', [
    "form_params" => [
        "user" => $config['user'],
        "key" => $config['key'],
        "nick" => $config['names'][1]
    ]
]);
echo $config['names'][0].": Hi"."\n";
$res2 = json_decode(($client->request('post', 'ask', [
    "form_params" => [
        "user" => $config['user'],
        "key" => $config['key'],
        "nick" => $config['names'][0],
        "text" => "Hi"
    ]
]))->getBody(), true);
echo $config['names'][1].": ".$res2['response']."\n";

function ask(Client $client, $api, $res) {
    $res1 = json_decode(($client->request('post', 'ask', [
        "form_params" => [
            "user" => $api['user'],
            "key" => $api['key'],
            "nick" => $api['names'][1],
            "text" => $res
        ]
    ]))->getBody(), true);
    echo $api['names'][0].": ".$res1['response']."\n";
    $res2 = json_decode(($client->request('post', 'ask', [
        "form_params" => [
            "user" => $api['user'],
            "key" => $api['key'],
            "nick" => $api['names'][0],
            "text" => $res1['response']
        ]
    ]))->getBody(), true);
    echo $api['names'][1].": ".$res2['response']."\n";
    ask($client, $api, $res2['response']);
}

ask($client, $config, $res2['response']);

?>
