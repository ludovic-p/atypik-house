<?php

namespace ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ToolsBundle:Default:index.html.twig');
    }
}
