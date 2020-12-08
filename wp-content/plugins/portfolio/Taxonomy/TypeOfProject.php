<?php

namespace portfolio\Taxonomy;
use portfolio\PostType\Project as ProjectPostType;

class TypeOfProject {

    public const NAME = 'type-of-project';

    public function register() {
    
        register_taxonomy(
            self::NAME,
            ProjectPostType::NAME,
            [
                'label'        => __('Types de projets'),
                'public'       => true,
                'hierarchical' => false,
                'show_in_rest' => true,
                'rewrite'               => array ('slug' => "types-de-projets")
            ]
        );
    }


    public function unregister() {
    
        unregister_taxonomy(self::NAME);
    }

}