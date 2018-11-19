<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoTestimonial\Mapper
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link      https://github.com/uthando-cms for the canonical source repository
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoTestimonial\Mapper;

use UthandoCommon\Mapper\AbstractDbMapper;

/**
 * Class Testimonial
 *
 * @package UthandoTestimonial\Mapper
 */
class TestimonialMapper extends AbstractDbMapper
{
    protected $table = 'testimonial';
    protected $primary = 'testimonialId';
} 