<?php

namespace RuralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use RuralBundle\Entity\Alojamiento;

class DefaultController extends Controller
{
  /**
   * @Route("/home_rural", name="rural")
   */
  public function indexAction()
  {
      return $this->render('RuralBundle:Default:index.html.twig');
  }

  /**
   * @Route("/comarca", name="comarca")
   */
  public function comarcaAction()
  {
      $repository = $this->getDoctrine()->getRepository('RuralBundle:Alojamiento');
      $alojamiento = $repository->findAll();

      return $this->render('RuralBundle:Default:comarca.html.twig',array("alojamientos"=>$alojamiento));
  }

  /**
   * @Route("/alojamiento", name="alojamiento")
   */
  public function alojamientoAction()
  {
      return $this->render('RuralBundle:Default:alojamiento.html.twig');
  }

  /*
  --- 1.Filtrado por campos ---
  $repository = $this->getDoctrine()->getRepository('RuralBundle:Alojamiento');
  $alojamiento = $repository->find(1);

  return $this->render('RuralBundle:Default:alojamiento.html.twig',array("id"=>$alojamiento->getId(),"nombre"=>$alojamiento->getNomAlojamiento()));

  --- 2.Filtrado por campos2 ---
  $repository = $this->getDoctrine()->getRepository('RuralBundle:Alojamiento');
  $alojamiento = $repository->find(1);

  return $this->render('RuralBundle:Default:alojamiento.html.twig',array("aloj"=>$alojamiento));
  */

}
