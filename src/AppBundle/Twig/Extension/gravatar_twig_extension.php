<?php

namespace AppBundle\Twig\Extension;

use Twig_SimpleFilter;

class gravatar_twig_extension extends \Twig_Extension
{
    public function getFilters()
    {
        $filter = new Twig_SimpleFilter('gravatar', function ($string) {
            return "gravatar works";
        });
        return [
            $filter
        ];
    }
}
