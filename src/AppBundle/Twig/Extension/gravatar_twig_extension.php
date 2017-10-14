<?php

namespace AppBundle\Twig\Extension;

use Twig_SimpleFilter;

class gravatar_twig_extension extends \Twig_Extension
{
    public function getFilters()
    {
        $filter = new Twig_SimpleFilter('gravatar', function ($email) {
            $email = trim($email);
            $email = strtolower($email);
            return "https://www.gravatar.com/avatar/" . md5( $email );
        });
        return [
            $filter
        ];
    }
}
