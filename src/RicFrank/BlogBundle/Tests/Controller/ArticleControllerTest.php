<?php

namespace RicFrank\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ArticleControllerTest extends WebTestCase
{

    public function testSingleArticle()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "It's homepage");

        $crawler = $client->click($crawler->selectLink('show')->link());
        $this->assertEquals('Hello ricfrank 1r', $crawler->filter('.ArticleTitle')->eq(0)->text());
        $this->assertEquals('lorem ipsum bla bla bla fack you!!! 1', $crawler->filter('.ArticleBody')->eq(0)->text());
       
    }

}