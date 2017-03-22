<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoTestimonial\Form
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link      https://github.com/uthando-cms for the canonical source repository
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoTestimonial\Form;

use TwbBundle\Form\View\Helper\TwbBundleForm;
use Zend\Form\Element\Button;
use Zend\Form\Form;

/**
 * Class Testimonial
 *
 * @package UthandoTestimonial\Form
 */
class Testimonial extends Form
{
    public function init()
    {
        $this->add([
            'name' => 'name',
            'type' => 'text',
            'options' => [
                'label' => 'Name',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
            'attributes' => [
                'placeholder' => 'Name',
            ],
        ]);

        $this->add([
            'name' => 'image',
            'type' => 'text',
            'options' => [
                'label' => 'Image',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
                'add-on-append' => new Button('testimonial-image-button', [
                    'label' => 'Add Image',
                ]),
            ],
            'attributes' => [
                'placeholder' => 'Image',
            ],
        ]);

        $this->add([
            'name' => 'location',
            'type' => 'text',
            'options' => [
                'label' => 'Location',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
            'attributes' => [
                'placeholder' => 'Location',
            ],
        ]);

        $this->add([
            'name' => 'company',
            'type' => 'text',
            'options' => [
                'label' => 'Company',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
            'attributes' => [
                'placeholder' => 'Company',
            ],
        ]);

        $this->add([
            'name' => 'website',
            'type' => 'text',
            'options' => [
                'label' => 'Website',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
            'attributes' => [
                'placeholder' => 'Website',
            ],
        ]);

        $this->add([
            'name' => 'sector',
            'type' => 'text',
            'options' => [
                'label' => 'Sector',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
            'attributes' => [
                'placeholder' => 'Sector',
            ],
        ]);

        $this->add([
            'name' => 'text',
            'type' => 'textarea',
            'options' => [
                'label' => 'HTML',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
            'attributes' => [
                'placeholder' => 'HTML Content',
                'class'       => 'editable-textarea',
                'id'          => 'testimonial-content-textarea',
                'rows'        => 25,
            ]
        ]);

        $this->add([
            'name' => 'testimonialId',
            'type' => 'hidden',
        ]);

        $this->add([
            'name' => 'security',
            'type' => 'csrf',
        ]);
    }
}

;