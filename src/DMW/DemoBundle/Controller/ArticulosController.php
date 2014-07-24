<?php

namespace DMW\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use DMW\DemoBundle\Entity\Articles;

class ArticulosController extends Controller
{
	public function listarAction()
	{

	}

	public function crearAction()
	{
    $articulo = new Articles();
    $articulo->setTitle('Articulo de ejemplo 1');
    $articulo->setAuthor('John Doe');
    $articulo->setContent('Contenido');
    $articulo->setTags('ejemplo');
    $articulo->setCreated(new \DateTime());
    $articulo->setUpdated(new \DateTime());
    $articulo->setSlug('articulo-de-ejemplo-1');
    $articulo->setCategory('ejemplo');
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($articulo);
        $em->flush();
        return $this->render('DMWDemoBundle:Articulos:articulo.html.twig', array('articulo' => $articulo));
	}

	public function editarAction($id)
	{

	}

	public function borrarAction($id)
	{

	}
}
