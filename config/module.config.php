<?php
return [
    'controllers' => [
        'invokables' => [
            'UthandoTestimonial\Controller\Testimonial' => 'UthandoTestimonial\Controller\Testimonial',
        ],
    ],
    'form_elements' => [
        'invokables' => [
            'UthandoTestimonial' => 'UthandoTestimonial\Form\Testimonial',
        ],
    ],
    'hydrators' => [
        'invokables' => [
            'UthandoTestimonial' => 'UthandoTestimonial\Hydrator\Testimonial',
        ]
    ],
    'input_filters' => [
        'invokables' => [
            'UthandoTestimonial' => 'UthandoTestimonial\InputFilter\Testimonial',
        ],
    ],
    'uthando_mappers' => [
        'invokables' => [
            'UthandoTestimonial' => 'UthandoTestimonial\Mapper\Testimonial',
        ],
    ],
    'uthando_models' => [
        'invokables' => [
            'UthandoTestimonial' => 'UthandoTestimonial\Model\Testimonial',
        ]
    ],
    'uthando_services' => [
        'invokables' => [
            'UthandoTestimonial' => 'UthandoTestimonial\Service\Testimonial',
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
                        'controller'    => 'Testimonial',
                        'action'        => 'view',
                    ],
                ],
            ],
        ],
    ],
];
