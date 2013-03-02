<?php

namespace RicFrank\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RicFrank\BlogBundle\Entity\Article;

class LoadArticleData implements FixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $article = new Article();
            $article->setTitle('Hello ricfrank ' . $i);
            $article->setBody('lorem ipsum bla bla bla fack you!!! ' . $i);
            $manager->persist($article);
            $manager->flush();
        }
    }

}
