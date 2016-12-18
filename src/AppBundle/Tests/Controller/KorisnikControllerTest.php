<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class KorisnikControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
    }

    public function testChecklogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/checklogin');
    }

}
