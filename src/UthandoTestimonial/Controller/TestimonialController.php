<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoTestimonial\Controller
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link      https://github.com/uthando-cms for the canonical source repository
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoTestimonial\Controller;

use UthandoCommon\Controller\AbstractCrudController;
use UthandoTestimonial\Service\TestimonialService;

/**
 * Class Testimonial
 *
 * @package UthandoTestimonial\Controller
 */
class TestimonialController extends AbstractCrudController
{
    protected $controllerSearchOverrides = array('sort' => 'testimonialId');
    protected $serviceName = TestimonialService::class;
    protected $route = 'admin/testimonial';

    public function viewAction()
    {
        $models = $this->getService()->fetchAll();

        return [
            'models' => $models,
        ];
    }
} 