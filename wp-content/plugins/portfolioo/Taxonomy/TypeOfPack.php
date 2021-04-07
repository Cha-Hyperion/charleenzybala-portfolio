<?php

namespace portfolioo\Taxonomy;
use portfolioo\PostType\Pack as PackPostType;

class TypeOfPack {

    public const NAME = 'type-of-pack';

    public function register() {
    
        register_taxonomy(
            self::NAME,
            PackPostType::NAME,
            [
                'label'        => __('Types de packs'),
                'public'       => true,
                'hierarchical' => true,
                'show_in_rest' => true,
                'rewrite'               => array ('slug' => "types-de-packs")
            ]
        );
    }


    public function unregister() {
    
        unregister_taxonomy(self::NAME);
    }

}