<?php

use UthandoTestimonial\Controller\TestimonialController;
use UthandoTestimonial\Service\TestimonialService;

return [
    'controllers' => [
        'invokables' => [
            TestimonialController::class => TestimonialController::class
        ],
    ],
    'uthando_services' => [
        'invokables' => [
            TestimonialService::class => TestimonialService::class,
        ],
    ],
    'view_manager' => [
        'template_map' => include __DIR__ . '/../template_map.php'
    ],
    'router' => [
        'routes' => [
            'testimonial' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/testimonial',
                    'constraints' => [

                    ],
                    'defaults' => [
                        '__NAMESPACE__' => 'UthandoTestimonial\Controller',
                        'controller'    => TestimonialController::class,
                        'action'        => 'view',
                    ],
                ],
            ],
        ],
    ],
];
