<?php namespace IceCollection\ClearCacheWidget;

use System\Classes\PluginBase;
use Lang;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'icecollection.clearcachewidget::lang.plugin.name',
            'description' => 'icecollection.clearcachewidget::lang.plugin.description',
            'author'      => 'Alexander Romanov',
            'maintainer'    => 'Belonogov Ilya',
            'icon'        => 'icon-trash'
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Icecollection\clearcachewidget\ReportWidgets\ClearCache' => [
                'label'   => 'icecollection.clearcachewidget::lang.plugin.name',
                'context' => 'dashboard'
            ]
        ];
    }

}
