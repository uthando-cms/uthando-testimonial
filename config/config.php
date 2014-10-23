<?php
return [
    'uthando_user' => [
        'acl' => [
            'roles' => [
                'guest' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                'UthandoTestimonial\Controller\Testimonial' => ['action' => ['view']],
                            ],
                        ],
                    ],
                ],
                'admin' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                'UthandoTestimonial\Controller\Testimonial' => ['action' => 'all'],
                            ],
                        ],
                    ],
                ],
            ],
            'resources' => [
                'UthandoTestimonial\Controller\Testimonial',
            ],
        ],
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
                        'force-ssl'     => 'http'
                    ],
                ],
            ],
            'admin' => [
                'child_routes' => [
                    'testimonial' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/testimonial',
                            'constraints'   => [
                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                            'defaults' => [
                                '__NAMESPACE__' => 'UthandoTestimonial\Controller',
                                'controller'    => 'Testimonial',
                                'action'        => 'index',
                                'force-ssl'     => 'ssl'
                            ],
                        ],
                        'may_terminate' => true,
                        'child_routes' => [
                            'edit' => [
                                'type'    => 'Segment',
                                'options' => [
                                    'route'         => '/[:action[/id/[:id]]]',
                                    'constraints'   => [
                                        'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id'		=> '\d+'
                                    ],
                                    'defaults'      => [
                                        'action'        => 'edit',
                                        'force-ssl'     => 'ssl'
                                    ],
                                ],
                            ],
                            'page' => [
                                'type'    => 'Segment',
                                'options' => [
                                    'route'         => '/page/[:page]',
                                    'constraints'   => [
                                        'page' => '\d+'
                                    ],
                                    'defaults'      => [
                                        'action'        => 'list',
                                        'page'          => 1,
                                        'force-ssl'     => 'ssl'
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'navigation' => [
        'admin' => [
            'modules' => [
                'pages' => [
                    'testimonial' => [
                        'label' => 'Testimonials',
                        'pages' => [
                            'list' => [
                                'label'     => 'List All Testimonials',
                                'action'    => 'list',
                                'route'     => 'admin/testimonial',
                                'resource'  => 'menu:user'
                            ],
                            'add' => [
                                'label'     => 'Add New Testimonial',
                                'action'    => 'add',
                                'route'     => 'admin/testimonial/edit',
                                'resource'  => 'menu:user'
                            ],
                        ],
                        'route' => 'admin/testimonial',
                        'resource' => 'menu:user'
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_map' => include __DIR__ . '/../template_map.php'
    ],
];
