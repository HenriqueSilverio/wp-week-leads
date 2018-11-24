<?php
/**
 * @todo Add documentation.
 */

namespace MiniCurso\Leads;

/**
 * @todo Add documentation.
 */
class PostType
{
    /**
     * @todo Add documentation.
     */
    protected function getArguments()
    {
        $labels = [
            'name'               => __('Leads', 'wp-week-leads'),
            'singular_name'      => __('Lead', 'wp-week-leads'),
            'menu_name'          => __('Leads', 'wp-week-leads'),
            'all_items'          => __('All Leads', 'wp-week-leads'),
            'add_new'            => __('New Lead', 'wp-week-leads'),
            'add_new_item'       => __('New Lead', 'wp-week-leads'),
            'edit_item'          => __('Edit Lead', 'wp-week-leads'),
            'new_item'           => __('New Lead', 'wp-week-leads'),
            'view_item'          => __('View Lead', 'wp-week-leads'),
            'search_items'       => __('Search Lead', 'wp-week-leads'),
            'not_found'          => __('Not found lead', 'wp-week-leads'),
            'not_found_in_trash' => __('Not found leads in trash', 'wp-week-leads')
        ];

        $arguments = [
            'labels'      => $labels,
            'description' => __('Register leads.', 'wp-week-leads'),
            'public'      => false,
            'show_ui'     => true,
            'menu_icon'   => 'dashicons-email-alt',
            'supports'    => [ 'title' ],
        ];

        return $arguments;
    }

    /**
     * @todo Add documentation.
     */
    public function start()
    {
        add_action('init', [$this, 'register']);
    }

    /**
     * @todo Add documentation.
     */
    public function register()
    {
        register_post_type('wpwl_leads', $this->getArguments());
    }
}
