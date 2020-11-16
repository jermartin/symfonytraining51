<?php

namespace App\Controller;

use ContainerXlNfCSB\getResponseService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\Exception\NoSuchOptionException;
use Symfony\Component\Routing\Annotation\Route;



class BlogController extends AbstractController
{
    /**
     * @Route ("/blog/{page}", name="blog_list", requirements={"page"="\d+"})
     */
    public function list(int $page): Response
    {

    }

    /**
     * @route("/", name="blog_index")
     */
    public function index():Response
    {

    }

    /**
     *
     * @Route ("/article/{slug}", name="blog_post")
     */
    public function show(string $slug):Response
    {

    }

}
