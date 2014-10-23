<?php

namespace UthandoTestimonial\Mapper;

use UthandoCommon\Mapper\AbstractDbMapper;

class Testimonial extends AbstractDbMapper
{
    protected $table = 'testimonial';
    protected $primary = 'testimonialId';
} 