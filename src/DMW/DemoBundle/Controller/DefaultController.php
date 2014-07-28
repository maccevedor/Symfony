<?php

namespace DMW\DemoBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DMW\DemoBundle\Entity\Articles;
use DMW\DemoBundle\Form\ArticleType;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DMWDemoBundle:Default:index.html.twig', array('name' => $name));
    }
    public function articulosAction()
{
    //-- Simulamos obtener los datos de la base de datos cargando los artículos a un array
    $articulos = array(
        array('id' => 1, 'title' => 'Articulo numero 1', 'created' => '2011-01-01'),
        array('id' => 2, 'title' => 'Articulo numero 2', 'created' => '2011-01-01'),
        array('id' => 3, 'title' => 'Articulo numero 3', 'created' => '2011-01-01'),
    );
    return $this->render('DMWDemoBundle:Default:articulos.html.twig', array('articulos' => $articulos));
}
    public function articuloAction($id)
{
    //-- Simulamos obtener los datos de la base de datos cargando los artículos a un array
    $articulos = array(
        array('id' => 1, 'title' => 'Articulo numero 1', 'created' => '2011-01-01'),
        array('id' => 2, 'title' => 'Articulo numero 2', 'created' => '2011-01-01'),
        array('id' => 3, 'title' => 'Articulo numero 3', 'created' => '2011-01-01'),
    );

    //-- Buscamos dentro del array el ID solicitado
    $articuloSeleccionado = null;
    foreach($articulos as $articulo)
    {
        if($articulo['id'] == $id)
        {
            $articuloSeleccionado = $articulo;
            break;
        }
    }

    //-- Invocamos a nuestra nueva plantilla, pasando los datos
    return $this->render('DMWDemoBundle:Default:articulo.html.twig', array('articulo' => $articuloSeleccionado));
 }
    
    
    public function newAction()
{
    $articulo = new Articles();
    $form = $this->createForm(new ArticleType(), $articulo);
    return $this->render('DMWDemoBundle:Articulos:new.html.twig', array(
        'form' => $form->createView(),
    ));
}
}


