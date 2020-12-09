<?php

namespace portfolioo\CustomFields;

class Fields
{
    public const NAME = 'acf';

    public static function addCustomFields() {

        //DOC: https://www.advancedcustomfields.com/resources/register-fields-via-php/

        if( function_exists('acf_add_local_field_group') ) :

        // Champs custom pour CPT projet   
        acf_add_local_field_group(
        [
            'key' => 'project',
            'title' => 'Détails du projet',
            'fields' => 
            [
                [
                    'key' => 'technology',
                    'label' => 'Choix technique',
                    'name' => 'technology',
                    'type' => 'text',
                ],
                [
                    'key' => 'year',
                    'label' => 'Année',
                    'name' => 'year',
                    'type' => 'date_picker',
                    'display_format' => 'Y',
			        'return_format' => 'Y',
			        'first_day' => 1,
                ],
                [
                    'key' => 'website',
                    'label' => 'Site internet',
                    'name' => 'website',
                    'type' => 'url',
                ],
                [
                    'key' => 'conception',
                    'label' => 'Conception',
                    'name' => 'conception',
                    'type' => 'wysiwyg',
                ],
                [
                    'key' => 'development',
                    'label' => 'Développement',
                    'name' => 'development',
                    'type' => 'wysiwyg',
                ],
                [
                    'key' => 'maintenance',
                    'label' => 'Maintenance',
                    'name' => 'maintenance',
                    'type' => 'wysiwyg',
                ],
                [
                    'key' => 'image_1',
                    'label' => 'Image 1',
                    'name' => 'image_1',
                    'type' => 'image',
                    'return_format' => 'id',
			        'preview_size' => 'large',
			        'library' => 'all',
                ],
                [
                    'key' => 'image_2',
                    'label' => 'Image 2',
                    'name' => 'image_2',
                    'type' => 'image',
                    'return_format' => 'id',
			        'preview_size' => 'large',
			        'library' => 'all',
                ],
                [
                    'key' => 'image_3',
                    'label' => 'Image 3',
                    'name' => 'image_3',
                    'type' => 'image',
                    'return_format' => 'id',
			        'preview_size' => 'large',
			        'library' => 'all',
                ],
            ],
            'location' => 
            [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'project',
                    ],
                ],
            ],
        ]
        );


    endif;

    }
}