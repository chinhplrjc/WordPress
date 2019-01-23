<?php

namespace App\Controller;

use Limelight\Limelight;
use Limelight\Mecab\PhpMecab\PhpMecab;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        $str = "すもももももももものうち";

//        $mecab = new PhpMecab();
//        $nodes = $mecab->parseToNode($str);
//        $nodes = $mecab->parseToNode($str);
//        var_dump($nodes);

//        $limeService = new Limelight();
//        $limeService->parse("asfasfd as");
        return $this->render('Default/index.html.twig');
    }
}
