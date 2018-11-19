<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoTestimonial\Hydrator
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link      https://github.com/uthando-cms for the canonical source repository
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoTestimonial\Hydrator;

use UthandoCommon\Hydrator\AbstractHydrator;
use UthandoCommon\Hydrator\Strategy\DateTime as DateTimeStrategy;

/**
 * Class Testimonial
 *
 * @package UthandoTestimonial\Hydrator
 */
class TestimonialHydrator extends AbstractHydrator
{
    public function __construct()
    {
        parent::__construct();

        $dateTime = new DateTimeStrategy();

        $this->addStrategy('dateCreated', $dateTime);
        $this->addStrategy('dateModified', $dateTime);

        return $this;
    }

    /**
     *
     * @param $object \UthandoTestimonial\Model\TestimonialModel
     * @return array
     */
    public function extract($object)
    {
        return [
            'testimonialId' => $object->getTestimonialId(),
            'name' => $object->getName(),
            'image' => $object->getImage(),
            'location' => $object->getLocation(),
            'company' => $object->getCompany(),
            'website' => $object->getWebsite(),
            'sector' => $object->getSector(),
            'text' => $object->getText(),
            'dateCreated' => $this->extractValue('dateCreated', $object->getDateCreated()),
            'dateModified' => $this->extractValue('dateModified', $object->getDateModified())
        ];
    }
} 