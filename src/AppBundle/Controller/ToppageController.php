<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ToppageController extends Controller
{
  /**
   * @Route("/")
   */
  public function indexAction()
  {
      $information = "10月の公演情報を追加しました。";
      return $this->render('Toppage/index.html.twig',
        ['information' => $information]);
  }
}
