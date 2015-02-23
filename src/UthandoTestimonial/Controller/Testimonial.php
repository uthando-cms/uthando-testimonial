<?php
namespace UthandoTestimonial\Controller;

use UthandoCommon\Controller\AbstractCrudController;

class Testimonial extends AbstractCrudController
{
    protected $controllerSearchOverrides = array('sort' => 'testimonialId');
    protected $serviceName = 'UthandoTestimonial\Service\Testimonial';
    protected $route = 'admin/testimonial';

    public function viewAction()
    {
        $models = $this->getService()->fetchAll();

        return [
            'models' => $models,
        ];
    }
} 