<?php

namespace MauticPlugin\UserGuideBundle\Controller;

use Mautic\CoreBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\Response;

class SupportController extends CommonController
{
    /**
     * Displays the Support page.
     */
    public function viewAction(): Response
    {
        return $this->delegateView([
            'viewParameters'  => [],
            'contentTemplate' => '@UserGuide/Support/index.html.twig',
            'passthroughVars' => [
                'activeLink' => 'support_menu',
                'route'      => 'support',
            ],
        ]);
    }
}
