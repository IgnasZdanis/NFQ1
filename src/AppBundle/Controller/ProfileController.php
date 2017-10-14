<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{

    /**
     * @Route("/about", name="about_page")
     */
    public function aboutAction(Request $request)
    {
        /*
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $url = $this->generateUrl('');
        }
        */
        //$username = $request->getUser();
        return $this->render('AppBundle::about.html.twig');
    }
}
