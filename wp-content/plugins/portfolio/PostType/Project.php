<?php

namespace portfolio\PostType;

// use paranges\Classes\Database;

class Project {

    public const NAME = 'project';

    public function register() {
    
        register_post_type(
            self::NAME,
            [
                'label'                 => __('Projets'),
                'public'                => true,
                'hierarchical'          => false,
                'show_in_rest'          => true,
                'rewrite'               => array ('slug' => "projets"),
                'supports'              => [
                    'title',
                    'editor',
                    'thumbnail',
                    'custom-fields'
                ],

                'has_archive' => true,
                'menu_icon' => 'dashicons-clipboard'
            ]
        );

        add_theme_support('post-thumbnails', [self::NAME]);
    }


    public function unregister() {

        unregister_post_type(self::NAME);
    }

}
