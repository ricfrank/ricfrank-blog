<?php

namespace RicFrank\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use RicFrank\BlogBundle\Entity\Article;

/**
 * Tag
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tag
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=50)
     */
    private $value;

    /**
     * @ORM\ManyToMany(targetEntity="Article", mappedBy="tags")
     * */
    private $articles;

    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Tag
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
    
     /**
     * Set one article
     * 
     * @param \RicFrank\BlogBundle\Entity\Tag $article
     */
    public function addArticle(Article $article)
    {
        $this->articles->add($article);
    }

    public function getArticles()
    {
        return  $this->articles;
    }

}
