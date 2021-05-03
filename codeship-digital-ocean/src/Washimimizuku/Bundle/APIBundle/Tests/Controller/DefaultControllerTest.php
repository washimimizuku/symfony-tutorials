<?php

namespace Washimimizuku\Bundle\APIBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Nuno');

        //$this->assertTrue($crawler->filter('html:contains("Hello Nuno")')->count() > 0);

        // Assert that the response content contains a string
        $this->assertContains('Hello Nuno', $client->getResponse()->getContent());

    }
}
