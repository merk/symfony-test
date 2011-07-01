<?php

namespace Test\VersionBundle\Controller\v1_1;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestVersionBundle:Default:index.html.twig');
    }
}
