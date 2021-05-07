<?php

namespace portfolioo\PostType;


class Microservice {

    public const NAME = 'microservice';

    public function register() {
    
        register_post_type(
            self::NAME,
            [
                'label'                 => __('Microservices'),
                'public'                => true,
                'hierarchical'          => true,
                'show_in_rest'          => true,
                'rewrite'               => array ('slug' => "microservices-wordpress"),
                'supports'              => [
                    'title',
                    'editor',
                    'thumbnail',
                    'custom-fields'
                ],

                'has_archive' => true,
                'menu_icon' => 'dashicons-archive'
            ]
        );

        add_theme_support('post-thumbnails', [self::NAME]);
    }


    public function unregister() {

        unregister_post_type(self::NAME);
    }

}
