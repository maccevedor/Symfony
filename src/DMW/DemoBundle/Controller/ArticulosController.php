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

        //$articulos = $em->getRepository('DMWDemoBundle:Articles')->findAll();
        //$articulos = $em->getRepository('DMWDemoBundle:Articles')->findByTitle("hola");
        $articulos = $em->createQuery("SELECT p FROM DMWDemoBundle:Articles p")->getResult();
        

        return $this->render('DMWDemoBundle:Articulos:listar.html.twig', array('articulos' => $articulos));



	}
	public function newsAction()
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
    public function newAction()
{
    //-- Obtenemos el request que contendrá los datos
    $request = $this->getRequest();

    $articulo = new Articles();
    $form = $this->createForm(new ArticleType(), $articulo);

    //-- En caso de que el request haya sido invocado por POST
    //   procesaremos el formulario
    if($request->getMethod() == 'POST')
    {
        //-- Pasamos el request el método bindRequest() del objeto 
        //   formulario el cual obtiene los datos del formulario
        //   y los carga dentro del objeto Article que está contenido
        //   también dentro del objeto Type
        $form->bind($request);

        //-- Con esto nuestro formulario ya es capaz de decirnos si
        //   los dato son válidos o no y en caso de ser así
        if($form->isValid())
        {
            //-- Procesamos los datos que ya están automáticamente
            //   cargados dentro de nuestra variable $articulo, ya sea
            //   grabándolos en la base de datos, enviando un mail, etc

            //-- Finalmente, al finalizar el procesamiento, siempre es
            //   importante realizar una redirección para no tener el
            //   problema de que al intentar actualizar el navegador
            //   nos dice que lo datos se deben volver a reenviar. En
            //   este caso iremos a la página del listado de artículos
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($articulo);
            $em->flush();
            return $this->redirect($this->generateURL('articulo_listar'));
        }
    }
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
    public function verArticulosAction()
        {
                return $this->render('DMWDemoBundle:Articulos:ver_articulos.html.twig', array());
        }
}
