<?php

namespace DM\VitrinBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @return array
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
