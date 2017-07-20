<?php
require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;

$hosts = [
    'host' => '192.168.33.10',
    'port' => '9300',
    'scheme' => 'http'
];

$clientBuilder = ClientBuilder::create();
$clientBuilder->setHosts($hosts);
$client = $clientBuilder->build();

$params = [
    'index' => 'php_index',
    'type'  => 'php_type',
    'id'    => 'unionsep',
    'body'  => [
        'testField' => 'def'
    ]
];

$response = $client->index($params);
