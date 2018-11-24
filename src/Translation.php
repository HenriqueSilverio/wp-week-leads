<?php
/**
 * @todo Add documentation.
 */

namespace MiniCurso\Leads;

/**
 * @todo Add documentation.
 */
class Translation
{
    /**
     * @todo Add documentation.
     */
    public function start()
    {
        add_action('init', [$this, 'loadTranslation']);
    }

    /**
     * @todo Add documentation.
     */
    public function loadTranslation()
    {
        load_plugin_textdomain('wp-week-leads', false, WPWL_PLUGIN_PATH . '/languages');
    }
}
