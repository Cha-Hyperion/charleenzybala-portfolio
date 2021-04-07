<?php

namespace portfolioo\PostType;


class Pack {

    public const NAME = 'pack';

    public function register() {
    
        register_post_type(
            self::NAME,
            [
                'label'                 => __('Packs'),
                'public'                => true,
                'hierarchical'          => true,
                'show_in_rest'          => true,
                'rewrite'               => array ('slug' => "packs"),
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
