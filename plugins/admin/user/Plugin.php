<?php namespace Admin\User;

use Backend;
use System\Classes\PluginBase;

/**
 * User Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'User',
            'description' => 'No description provided yet...',
            'author'      => 'Admin',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Admin\User\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'admin.user.some_permission' => [
                'tab' => 'User',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'user' => [
                'label'       => 'User',
                'url'         => Backend::url('admin/user/users'),
                'icon'        => 'icon-leaf',
                'permissions' => ['admin.user.*'],
                'order'       => 500,
                'sideMenu'    => [
                    "user" => [
                        'label'       => 'User',
                        'url'         => Backend::url('admin/user/users'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['admin.user.*'],
                        'order'       => 500
                    ],
                    "arrival" => [
                        'label'       => 'Arrival',
                        'url'         => Backend::url('admin/user/arrivals'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['admin.arrival.*'],
                        'order'       => 500
                    ]
                ]
            ],
        ];
    }
}
