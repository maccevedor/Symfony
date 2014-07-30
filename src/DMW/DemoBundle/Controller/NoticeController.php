<?php
// src/MDW/DemoBundle/Controller/NoticeController.php
namespace DMW\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NoticeController extends Controller
{
    // tenemos un array con los datos básicos
    private $array_notice = array(
        array(
            'title' => 'Titulo de noticia 0',
            'content' => 'Contenido de noticia 0'
        ),
        array(
            'title' => 'Titulo de noticia 1',
            'content' => 'Contenido de noticia 1'
        ),
    );    

    public function indexAction()
    {
        // suponiendo que obtenemos del modelo el listado de noticias
        return $this->render('DMWDemoBundle:Notice:index.html.twig', array(
            'notices' => $this->array_notice
        ));
    }

    public function noticeViewAction($notice_id)
    {
        //obtenemos la noticia del modelo, en este ejemplo proviene de un array
        $notice = $this->array_notice[$notice_id];
        return $this->render('DMWDemoBundle:Notice:noticeView.html.twig', array(
            'notice' => $notice
        ));
    }
}