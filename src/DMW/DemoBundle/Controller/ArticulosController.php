<?php

namespace DMW\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use DMW\DemoBundle\Entity\Articles;
use DMW\DemoBundle\Form\ArticleType;

class ArticulosController extends Controller
{
	public function listarAction()
	{
        $em = $this->getDoctrine()->getEntityManager();

        $articulos = $em->getRepository('DMWDemoBundle:Articles')->findAll();

        return $this->render('DMWDemoBundle:Articulos:listar.html.twig', array('articulos' => $articulos));

	}
	public function newAction()
	{
    //-- Obtenemos el request que contendrá los datos
    $request = $this->getRequest();

    $articulo = new Articles();
    $form = $this->createForm(new ArticleType(), $articulo);

    //-- En caso de que el request haya sido invocado por POST
    //   procesaremos el formulario
        //return $this->redirect($this->generateURL('articulos'));
        return $this->render('DMWDemoBundle:Articulos:new.html.twig', array(
        'form' => $form->createView(),
    ));
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
        $em = $this->getDoctrine()->getEntityManager();

        $articulo = $em->getRepository('DMWDemoBundle:Articles')->find($id);

        $articulo->setTitle('hola fores');
        $articulo->setUpdated(new \DateTime());

        $em->persist($articulo);
        $em->flush();

        return $this->render('DMWDemoBundle:Articulos:articulo.html.twig', array('articulo' => $articulo));

	}

	public function borrarAction($id)
	{
        $em = $this->getDoctrine()->getEntityManager();

        $articulo = $em->getRepository('DMWDemoBundle:Articles')->find($id);

        $em->remove($articulo);
        $em->flush();

        return $this->redirect(
            $this->generateUrl('articulo_listar')
        );
	}
}
