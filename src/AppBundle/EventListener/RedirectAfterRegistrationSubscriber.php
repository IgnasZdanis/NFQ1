<?php
/**
 * Created by PhpStorm.
 * User: ignas
 * Date: 17.10.14
 * Time: 16.42
 */

namespace AppBundle\EventListener;


use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;

class RedirectAfterRegistrationSubscriber implements EventSubscriberInterface
{

    private $router;

    public function __construct(RouterInterface $router) {
        $this->router = $router;
    }

    public static function getSubscribedEvents()
    {
        return [
          FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess'
        ];
    }

    public function onRegistrationSuccess(FormEvent $event)
    {
        $url = $this->router->generate('about_page');
        $response = new RedirectResponse($url);
        $event->setResponse($response);
    }

}