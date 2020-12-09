<?php
namespace portfolioo;

use portfolioo\PostType\Project as ProjectPostType;
use portfolioo\Taxonomy\TypeOfProject as TypeOfProjectTaxonomy;
use portfolioo\CustomFields\Fields;
use portfolioo\Shortcodes\Shortcodes;

class Plugin {
    public function run() {
        $this->registerPluginHooks();
        $this->addInitActions();
        $this->acfActions();
        $this->addShortcodes();
        
    }

    public function addInitActions() {
        add_action(
            'init',
            [
                $this,
                'registerPostTypes'
            ]
        );

        add_action(
            'init',
            [
                $this,
                'registerTaxonomies'
            ]
        );
    }

    public function registerPostTypes() {
        $projectPostType = new ProjectPostType;
        $projectPostType->register();
    }

    public function unregisterPostTypes() {
        $projectPostType = new ProjectPostType;
        $projectPostType->unregister();
    }

    public function registerTaxonomies() {
        $typeOfProject = new TypeOfProjectTaxonomy;
        $typeOfProject->register();
    }

    public function unregisterTaxonomies() {
        $typeOfProject = new TypeOfProjectTaxonomy;
        $typeOfProject->unregister();
    }

    private function acfActions()
    {
        add_action(
            'acf/init',
            [
                Fields::class,
                'addCustomFields'
            ]
        );
    }

    public function addShortcodes() {
        add_shortcode( 
            'conception_list',
            [
                Shortcodes::class,
                'shortcodeGetConceptionList'
            ]
        );
        add_shortcode( 
            'development_list',
            [
                Shortcodes::class,
                'shortcodeGetDevelopmentList'
            ]
        );
        add_shortcode( 
            'maintenance_list',
            [
                Shortcodes::class,
                'shortcodeGetMaintenanceList'
            ]
        );
    }


    public function registerPluginHooks()
    {
        add_action(
            'init',
            [
                $this,
                'registerTaxonomies'
            ]
        );
        [
            $this,
            'activate'
        ];
        register_activation_hook(
            PORTFOLIOO_PLUGIN_FILE,
            [
                $this,
                'activate'
            ]
        );
        register_deactivation_hook(
            PORTFOLIOO_PLUGIN_FILE,
            [
                $this,
                'deactivate'
            ]
        );
    }

    public function activate()
    {
        $this->registerPostTypes();
        $this->registerTaxonomies();

        flush_rewrite_rules();
    }

    public function deactivate()
    {
        $this->unregisterPostTypes();
        $this->unregisterTaxonomies();

        flush_rewrite_rules();
    }

}