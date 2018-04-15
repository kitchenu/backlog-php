<?php

$autoloader = require dirname(__DIR__) . '/vendor/autoload.php';

$autoloader->addPsr4('Kitchenu\Chatwork\Tests\\', __DIR__);

function make_mock_handler() {
    $headers = [
        'Content-Type' => ['application/json;charset=utf-8']
    ];
    $body = json_encode([
        'test_1'=> '1',
        'test_2'=> '2',
        'test_3'=> '3',
    ]);
    $mockResponse = new GuzzleHttp\Psr7\Response(200, $headers, $body);
    $mock = new GuzzleHttp\Handler\MockHandler([$mockResponse]);

    return GuzzleHttp\HandlerStack::create($mock);
}
