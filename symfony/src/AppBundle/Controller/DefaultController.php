<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        
        for($i = 1; $i<=1000; $i++){
            $post = new Post();
            $post->setTitle('title');
            $post->setContent(19.99);
            $em->persist($post);
            $em->flush();
        }
    }
}
