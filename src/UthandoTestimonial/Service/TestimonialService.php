<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoTestimonial\Service
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link      https://github.com/uthando-cms for the canonical source repository
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoTestimonial\Service;

use UthandoCommon\Service\AbstractMapperService;
use UthandoTestimonial\Form\TestimonialForm;
use UthandoTestimonial\Hydrator\TestimonialHydrator;
use UthandoTestimonial\InputFilter\TestimonialInputFilter;
use UthandoTestimonial\Mapper\TestimonialMapper;
use UthandoTestimonial\Model\TestimonialModel;

/**
 * Class Testimonial
 *
 * @package UthandoTestimonial\Service
 */
class TestimonialService extends AbstractMapperService
{
    protected $form         = TestimonialForm::class;
    protected $hydrator     = TestimonialHydrator::class;
    protected $inputFilter  = TestimonialInputFilter::class;
    protected $mapper       = TestimonialMapper::class;
    protected $model        = TestimonialModel::class;
} 