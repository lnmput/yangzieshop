<?php namespace Yangzie\Shop;

use Backend;
use System\Classes\PluginBase;

/**
 * Shop Plugin Information File
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
            'name'        => 'Shop',
            'description' => 'No description provided yet...',
            'author'      => 'Yangzie',
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

        return [
            'Yangzie\Shop\Components\Todo' => 'todo',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'yangzie.shop.some_permission' => [
                'tab' => 'Shop',
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
            'shop' => [
                'label'       => '杨子鳄',
                'url'         => Backend::url('yangzie/shop/products'),
                'icon'        => 'icon-leaf',
                'permissions' => ['yangzie.shop.*'],
                'order'       => 500,
                "sideMenu" => [
                    'categories' => [
                        "label" => "分类管理",
                        "description" => "查看和管理商品分类",
                        "url" => Backend::url("yangzie.shop/categories"),
                        "icon" => "icon-bars",
                        "permissions" => ["yangzie.shop.categories"],
                        "group" => "分类&产品",
                    ],
                    'products' => [
                        "label" => "产品管理",
                        "description" => "查看和管理商品",
                        "url" => Backend::url("yangzie/shop/hhhh"),
                        "icon" => "icon-gift",
                        "permissions" => ["yangzie.shop.products"],
                        "group" => "分类&产品",
                    ],
                ]
            ],

        ];
    }

    public function registerSettings()
    {
        return [
            'shopconfig' => [
                'label'       => '系统设置',
                'description' => '这里是一些系统全局配置项',
                'category'    => 'SHOP',
                'icon'        => 'icon-cogs',
                'class'       => 'Yangzie\Shop\Models\Settings',
                'order'       => 1,
                'keywords'    => 'shop setting',
                'permissions' => ['yangzie.shop.shopSettings']
            ]
        ];
    }
}
