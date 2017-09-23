<?php

namespace Test\Framework;

use Framework\App;
use GuzzleHttp\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase;


class AppTests extends TestCase {

    public function testRedirectTrailingSlash() {

        $app = new App();
        $request = new ServerRequest("GET", "/demoslash/");
        $response = $app->run($request);
        $this->assertEquals('Location: /demoslash', $response->getHeader('Location'));
        $this->assertEquals(301, $response->getStatusCode());
    }

    public function testBlog(){
        $app = new App();
        $request = new ServerRequest('GET', "/blog");
        $response = $app->run($request);
        $this->assertContains('<h1>Bienvenue sur le blog </h1>', (string)$request->getBody());
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testError404(){
        $app = new App();
        $request = new ServerRequest('GET', "/aze");
        $response = $app->run($request);
        $this->assertContains('<h1>Erreur 404</h1>', (string)$request->getBody());
        $this->assertEquals(404, $response->getStatusCode());
    }

}