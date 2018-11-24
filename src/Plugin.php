<?php
/**
 * @todo Add documentation.
 */

namespace MiniCurso\Leads;

use MiniCurso\Leads\Ajax;
use MiniCurso\Leads\Assets;
use MiniCurso\Leads\Widget;
use MiniCurso\Leads\PostType;
use MiniCurso\Leads\Translation;

/**
 * @todo Add documentation.
 */
final class Plugin
{
    /**
     * @todo Add documentation.
     */
    const VERSION = '0.0.1';

    /**
     * @todo Add documentation.
     */
    protected static $instance;

    /**
     * @todo Add documentation.
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @todo Add documentation.
     */
    public function start()
    {
        $this->defineConstants();

        $translation = new Translation();
        $translation->start();

        $widget = new Widget();
        $widget->start();

        $postType = new PostType();
        $postType->start();

        $ajax = new Ajax();
        $ajax->start();

        $assets = new Assets();
        $assets->start();
    }

    /**
     * @todo Add docs.
     */
    private function defineConstants()
    {
        define('WPWL_PLUGIN_PATH', dirname(__FILE__, 2));
        define('WPWL_TEMPLATE_PATH', WPWL_PLUGIN_PATH . '/templates');
        define('WPWL_PLUGIN_URL', plugins_url('', WPWL_PLUGIN_PATH . '/wp-week-leads.php'));
        define('WPWL_ASSETS_URL', WPWL_PLUGIN_URL . '/assets');
    }
}
