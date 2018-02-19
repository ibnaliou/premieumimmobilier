<?php

namespace PI\Premium_ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PremiumBundle:Default:index.html.twig');
    }

   
}
