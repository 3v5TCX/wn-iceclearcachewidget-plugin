<?php namespace icecollection\iceclearcachewidget;

use System\Classes\PluginBase;
use Lang;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'icecollection.iceclearcachewidget::lang.plugin.name',
            'description' => 'icecollection.iceclearcachewidget::lang.plugin.description',
            'author'      => 'Alexander Romanov',
            'maintainer'    => 'Belonogov Ilya',
            'icon'        => 'icon-trash'
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'icecollection\iceclearcachewidget\ReportWidgets\ClearCache' => [
                'label'   => 'icecollection.iceclearcachewidget::lang.plugin.name',
                'context' => 'dashboard'
            ]
        ];
    }

}
