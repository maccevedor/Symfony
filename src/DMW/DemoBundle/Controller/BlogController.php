<?php
// src/MDW/DemoBundle/Controller/DefaultController.php
namespace MDW\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request; 

class BlogController extends Controller
{
    public function showAction(Request $peticion, $slug)
{
    $articulo = $peticion->get('slug'); // otra forma para obtener comodines, GET o POST
    $metodo = $peticion->getMethod(); //obtenemos si la petición fue por GET o POST
    return $this->render('MDWDemoBundle:Blog:show.html.twig', array(
        'articulo' => $articulo
    ));
}
}