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
            return '<a href="' . get_field('website') . '">Voir le site</a>';
        }
    }

}