<?php
/**
 * @todo Add documentation.
 */

namespace MiniCurso\Leads;

/**
 * @todo Add documentation.
 */
class Assets
{
    /**
     * @todo Add documentation.
     */
    public function start()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
    }

    /**
     * @todo Add documentation.
     */
    public function enqueue()
    {
        wp_enqueue_style(
            'wp-week-leads-styles',
            WPWL_ASSETS_URL . '/public.css',
            [],
            '0.0.1',
            'all'
        );

        wp_enqueue_script(
            'wp-week-leads-scripts',
            WPWL_ASSETS_URL . '/public.js',
            [ 'jquery' ],
            '0.0.1',
            true
        );

        $params = [
            'url'   => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('wpwl_save_lead'),
        ];

        wp_localize_script('wp-week-leads-scripts', 'MiniCursoLeads', $params);
    }
}
