<?php

return [
    'name'        => 'User Guide',
    'description' => 'A plugin to add a User Guide & Support menu items.',
    'author'      => 'riadims',
    'version'     => '1.0.0',

    'menu' => [
        'main' => [
            'user_guide' => [
                'id'        => 'user_guide_menu',
                'iconClass' => 'fa fa-play-circle-o',
                'label'     => 'User Guide',
                'priority'  => 1,
                'uri'       => 'https://itmelona.nimbusweb.me/share/10841997/gx1yltzab5b9713kblk0',
                'linkAttributes' => [
                    'target' => '_blank',
                ],
            ],
            'support' => [
                'id'        => 'support_menu',
                'iconClass' => 'fa fa-question-circle-o',
                'route'     => 'support',
                'label'     => 'Support',
                'priority'  => 0,
                'linkAttributes' => [
                    'data-toggle' => 'ajax',
                    'href'        => '/s/support',
                ],
            ],
        ],
    ],

    'services' => [
        'events' => [],
    ],

    'routes' => [
        'main' => [
            'support' => [
                'path'       => '/support',
                'controller' => 'MauticPlugin\UserGuideBundle\Controller\SupportController::viewAction',
            ],
        ],
    ],
];
