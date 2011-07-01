<?php

namespace Test\VersionBundle\Controller\v1_0;

use FOS\RestBundle\Controller\Annotation as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Rest\Version(1.0)
 */
class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestVersionBundle:Default:index.html.twig');
    }
}
