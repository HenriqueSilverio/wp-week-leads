<?php
/**
 * @todo Add documentation.
 */

namespace MiniCurso\Leads;

/**
 * @todo Add documentation.
 */
class Ajax
{
    /**
     * @todo Add documentation.
     */
    public function start()
    {
        add_action('wp_ajax_wpwl_save_lead', [$this, 'handle']);
        add_action('wp_ajax_nopriv_wpwl_save_lead', [$this, 'handle']);
    }

    /**
     * @todo Add documentation.
     */
    public function handle()
    {
        if (false === $this->canStore()) {
            wp_send_json_error([], 403);
        }

        $email = sanitize_text_field($_POST['email']);

        $leadId = wp_insert_post([
            'post_type'   => 'wpwl_leads',
            'post_status' => 'publish',
            'post_title'  => $email,
        ]);

        if (is_wp_error($leadId)) {
            wp_send_json_error([], 400);
        }

        $data = [
            'id' => $leadId,
            'email' => $email,
        ];

        wp_send_json_success($data, 200);
    }

    /**
     * @todo Add documentation.
     */
    protected function canStore()
    {
        $email = isset($_POST['email']) ? sanitize_text_field($_POST['email']) : false;

        $doingAjax  = wp_doing_ajax();
        $validNonce = check_ajax_referer('wpwl_save_lead', 'guard');
        $validEmail = is_email($email);

        return $doingAjax && $validNonce && $validEmail;
    }
}
