<?php

namespace UthandoTestimonial\Hydrator;

use UthandoCommon\Hydrator\AbstractHydrator;
use UthandoCommon\Hydrator\Strategy\DateTime as DateTimeStrategy;

class Testimonial extends AbstractHydrator
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
     * @param $object \UthandoTestimonial\Model\Testimonial
     * @return array
     */
    public function extract($object)
    {
        return [
            'testimonialId' => $object->getTestimonialId(),
            'name'          => $object->getName(),
            'image'         => $object->getImage(),
            'location'      => $object->getLocation(),
            'company'       => $object->getCompany(),
            'website'       => $object->getWebsite(),
            'sector'        => $object->getSector(),
            'text'          => $object->getText(),
            'dateCreated'   => $this->extractValue('dateCreated', $object->getDateCreated()),
            'dateModified'  => $this->extractValue('dateModified', $object->getDateModified())
        ];
    }
} 