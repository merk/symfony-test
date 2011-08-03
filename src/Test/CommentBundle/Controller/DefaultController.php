<?php

namespace Test\CommentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('TestCommentBundle:Default:index.html.twig');
    }

    public function flatAction()
    {
        return $this->render('TestCommentBundle:Default:flat.html.twig');
    }
}
