<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Post
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;


    /**
     * @ORM\Column(type="string", length=100)
     */
    private $content;
}