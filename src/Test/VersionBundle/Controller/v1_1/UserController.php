<?php

namespace Test\VersionBundle\Controller\v1_0;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestVersionBundle:Default:index.html.twig');
    }
}
