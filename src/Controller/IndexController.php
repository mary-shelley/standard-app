<?php
namespace App\Controller;

use DI\Annotation\Inject;
use Corley\Middleware\Annotations as Middleware;

class IndexController
{
    /**
     * @Inject({"twig"})
     */
    public function __construct($twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Middleware\Route("/", methods={"GET"})
     * @Middleware\After(targetClass="App\Serializer", targetMethod="asHtml")
     */
    public function indexAction($request, $response)
    {
        return $this->twig->render('index/index.html.twig', ["to" => "World"]);
    }
}
