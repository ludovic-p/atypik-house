<?php

namespace AtypikHouseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AtypikHouseBundle:Default:index.html.twig');
        echo 'zefe';;;;
    }
}
