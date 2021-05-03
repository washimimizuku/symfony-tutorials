<?php

namespace Washimimizuku\Bundle\APIBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testGetUsersList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/users.json');

        // Assert that the "Content-Type" header is "application/json"
        $this->assertTrue(
            $client->getResponse()->headers->contains(
                'Content-Type',
                'application/json'
            )
        );

        // Assert that the response content contains a string
        $this->assertContains('alice', $client->getResponse()->getContent());
    }
}
