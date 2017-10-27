<?php

namespace PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
  /**
   * @Route("/", name="home")
   */
  public function indexAction()
  {
      return $this->render('PrincipalBundle:Default:index.html.twig');
  }

  /**
   * @Route("/nosotros", name="nosotros")
   */
  public function nosotrosAction()
  {
      return $this->render('PrincipalBundle:Default:nosotros.html.twig');
  }

  /**
   * @Route("/contacto", name="contacto")
   */
  public function contactoAction()
  {
      return $this->render('PrincipalBundle:Default:contacto.html.twig');
  }
}
