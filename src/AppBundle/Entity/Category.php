<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;
    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Article")
     */
    private $articles;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->types = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add articles to category.
     *
     * @param Article $articles
     *
     * @return Article
     */
    public function addArticle(Article $articles)
    {
        $this->articles[] = $articles;
        return $this;
    }

    /**
     * Remove articles.
     *
     * @param Article $articles
     */
    public function removeArticle(Article $articles)
    {
        $this->types->removeElement($articles);
    }

    /**
     * Get categories.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
