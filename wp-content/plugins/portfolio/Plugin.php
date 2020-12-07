<?php
namespace portfolio;

use portfolio\PostType\Project as ProjectPostType;
use portfolio\Taxonomy\TypeOfProject as TypeOfProjectTaxonomy;

class Plugin {
    public function run() {
        $this->registerPluginHooks();
        $this->addInitActions();
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
            PORTFOLIO_PLUGIN_FILE,
            [
                $this,
                'activate'
            ]
        );
        register_deactivation_hook(
            PORTFOLIO_PLUGIN_FILE,
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