<?php
/**
 * @todo Add documentation.
 */

namespace MiniCurso\Leads;

/**
 * @todo Add documentation.
 */
class Widget extends \WP_Widget
{
    /**
     * Widget constructor.
     */
    public function __construct()
    {
        $options = [
            'classname' => 'wpwl-leads-widget',
            'description' => 'A form to easily capture email leads into your website.',
        ];

        parent::__construct('wpwl-leads-widget', 'WP Week Leads', $options);
    }

    /**
     * @todo Add documentation.
     */
    protected function getDefaults()
    {
        return [
            'title' => __('Newsletter', 'wp-week-leads'),
        ];
    }

    /**
     * @todo Add documentation.
     */
    public function start()
    {
        add_action('widgets_init', [$this, 'register']);
    }

    /**
     * @todo Add documentation.
     */
    public function register()
    {
        register_widget('MiniCurso\Leads\Widget');
    }

    /**
     * Back-End widget form
     *
     * A form with configurable options to control how widget is displayed.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {
        $instance = wp_parse_args($instance, $this->getDefaults());

        $title = sanitize_text_field($instance['title']);

        $data = [
            'title' => [
                'id' => $this->get_field_id('title'),
                'name' => $this->get_field_name('title'),
                'value' => $title,
            ],
        ];

        require WPWL_TEMPLATE_PATH . '/admin/widget.php';
    }

    /**
     * Sanitize values
     *
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $newInstance Values just sent to be saved.
     * @param array $oldInstance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($newInstance, $oldInstance)
    {
        $data = $oldInstance;

        $data['title'] = $newInstance['title']
                        ? sanitize_text_field($newInstance['title'])
                        : $this->getDefaults()['title'];

        return $data;
    }

    /**
     * Widget Front-End display.
     *
     * @see WP_Widget::widget()
     *
     * @param array $arguments Widget arguments.
     * @param array $instance  Saved values from database.
     */
    public function widget($arguments, $instance)
    {
        $before_title = $arguments['before_title'] ?? '';
        $after_title  = $arguments['after_title'] ?? '';
        $title        = $instance['title'] ?? '';
        $title        = $before_title . $title . $after_title;

        echo $arguments['before_widget'];

        require_once WPWL_TEMPLATE_PATH . '/public/widget.php';

        echo $arguments['after_widget'];
    }
}
