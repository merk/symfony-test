<?php

namespace Test\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $am = $this->container->get('merk_notification.manager.action');
        $action = $am->createAction($user);
        $action->setMessage('tim did something');
        $action->setRouteName('hello');
        $action->setRouteParams(array());
        $am->addAction($action);

        var_dump($action);

        die;


        return $this->render('TestAppBundle:Default:index.html.twig');
    }
}
