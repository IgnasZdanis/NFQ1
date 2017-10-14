<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @throws \InvalidArgumentException
     */
    public function indexAction(Request $request)
    {
        $url = $this->generateUrl('about_page');
        /*
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $url = $this->generateUrl('');
        }
        */
        // replace this example code with whatever you need
        $response = new RedirectResponse($url);
        return $response;

    }
}
