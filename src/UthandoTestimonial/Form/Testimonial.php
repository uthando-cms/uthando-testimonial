<?php

namespace UthandoTestimonial\Form;

use Zend\Form\Form;

class Testimonial extends Form
{
    public function init()
    {
        $this->add([
            'name' => 'testimonialId',
            'type' => 'hidden',
        ]);

        $this->add([
            'name' => 'name',
            'type' => 'text',
            'options'		=> [
                'label'	=> 'Name:',
            ],
        ]);

        $this->add([
            'name' => 'image',
            'type' => 'text',
            'options'		=> [
                'label'	=> 'Image:',
            ],
        ]);

        $this->add([
            'name' => 'location',
            'type' => 'text',
            'options'		=> [
                'label'	=> 'Location:',
            ],
        ]);

        $this->add([
            'name' => 'company',
            'type' => 'text',
            'options'		=> [
                'label'	=> 'Company:',
            ],
        ]);

        $this->add([
            'name' => 'website',
            'type' => 'text',
            'options'		=> [
                'label'	=> 'Website:',
            ],
        ]);

        $this->add([
            'name' => 'sector',
            'type' => 'text',
            'options'		=> [
                'label'	=> 'Sector:',
            ],
        ]);

        $this->add([
            'name' => 'text',
            'type' => 'textarea',
            'options'		=> [
                'label'	=> 'Text:',
            ],
            'attributes'    => [
                'id'    => 'testimonial-content-textarea',
            ]
        ]);
    }
};