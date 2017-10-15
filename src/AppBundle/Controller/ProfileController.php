<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{

    /**
     * @Route("/about", name="about_page")
     */
    public function aboutAction()
    {
        /*
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $url = $this->generateUrl('');
        }
        */
        //$username = $request->getUser();
        return $this->render('about.html.twig');
    }
}
