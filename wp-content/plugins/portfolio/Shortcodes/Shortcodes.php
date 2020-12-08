<?php

namespace portfolio\Shortcodes;

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

}