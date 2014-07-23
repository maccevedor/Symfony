<?php
// src/MDW/DemoBundle/Controller/DefaultController.php
namespace MDW\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class BlogController extends Controller
{
    public function showAction($slug)
    {
        $articulo = $slug; // (suponiendo que obtenemos el artículo del modelo con slug)
        return $this->render('MDWDemoBundle:Blog:show.html.twig', array(
            'articulo' => $articulo
        ));
    }
}