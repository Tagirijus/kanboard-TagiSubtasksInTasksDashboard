<?php

namespace Kanboard\Plugin\TagiSubtasksInTasksDashboard;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;
// use Kanboard\Plugin\TagiSubtasksInTasksDashboard\AgeHelper;  // Helper Class and Filename should be exact
// use Kanboard\Helper;  // Add core Helper for using forms etc. inside external templates

class Plugin extends Base
{
    public function initialize()
    {
        // Template Override
        $this->template->setTemplateOverride('dashboard/tasks', 'TagiSubtasksInTasksDashboard:dashboard/tasks');
        $this->template->setTemplateOverride('task_list/task_subtasks', 'TagiSubtasksInTasksDashboard:task_list/task_subtasks');
    }

    public function getPluginName()
    {
        // Plugin Name MUST be identical to namespace for Plugin Directory to detect updated versions
        // Do not translate the plugin name here
        return 'TagiSubtasksInTasksDashboard';
    }

    public function getPluginDescription()
    {
        return t('This plugin simply adds the subtasks list in the tasks list section of the dashboard.');
    }

    public function getPluginAuthor()
    {
        return 'Tagirijus';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.26';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/tagirijus/kanboard-TagiSubtasksInTasksDashboard';
    }
}
