<?php

require '../vendor/autoload.php';

$app = new \Framework\App([
    BlogModule::class
]);

// https://youtu.be/-iW6lo6wq1Y?t=17m23s

$response = $app->run(\GuzzleHttp\Psr7\ServerRequest::fromGlobals());
\Http\Response\send($response);