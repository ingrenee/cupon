<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction() {
        
        $em=$this->getDoctrine()->getManager();
       $oferta= $em->find("OfertaBundle:Oferta", 1);
       $precio=$oferta->getPrecio();
       
        return $this->render('OfertaBundle:Default:index.html.twig', array('name' => $precio));
    }

    public function ayudaAction() {
        return $this->render('OfertaBundle:Default:ayuda.html.twig');
    }

}
