<?php

namespace WebBundle\Controller;

use Limelight\Limelight;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $limeService = new Limelight();
        $limeService->parse("asfasfd as");
        return $this->render('WebBundle:Default:index.html.twig');
    }
}
