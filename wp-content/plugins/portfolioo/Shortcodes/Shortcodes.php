<?php

namespace portfolioo\Shortcodes;

class Shortcodes {

    public static function shortcodeGetConceptionList() {
        return the_field('conception');
    }

    public static function shortcodeGetDevelopmentList() {
        return the_field('development');
    }

    public static function shortcodeGetMaintenanceList() {
        return the_field('maintenance');
    }

    public static function shortcodeGetWebsiteProject() {
        if (! empty(get_field('website'))) {
            return '<a href="' . get_field('website') . '">Voir le site >></a>';
        }
        if (! empty(get_field('demo'))) {
            return '<a href="' . get_field('demo') . '">Voir la démo >></a>';
        }
    }

    public static function shortcodeGetPreviousPost() {
            return previous_post_link('%link', '<< Voir le projet précédent');
    }

    public static function shortcodeGetNextPost() {
            return next_post_link( '%link', 'Voir le projet suivant >>');
    }

}