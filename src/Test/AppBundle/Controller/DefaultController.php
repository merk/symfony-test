<?php

namespace Test\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $nm = $this->container->get('merk_notification.manager.notification');

        $nm->createNotification();


        return $this->render('TestAppBundle:Default:index.html.twig');
    }
}
