<?php
/**
 * @todo Add documentation.
 */

echo $title; ?>

<div class="alert alert--danger hidden" data-wpwl-danger>
  <?php _e('Please, type your e-mail.', 'wp-week-leads'); ?>
</div>

<div class="alert alert--success hidden" data-wpwl-success>
  <?php _e('Successfully subscribed. Thanks!', 'wp-week-leads'); ?>
</div>

<form class="search-form" data-wpwl-form>
  <label class="screen-reader-text" for="wpwl-email">
    <?php _e('Title:', 'wp-week-leads'); ?>
  </label>
  <input
    id="wpwl-email"
    class="search-field"
    name="wpwl-email"
    value=""
    type="email"
    placeholder="<?php esc_attr_e("What's your best email?", 'wp-week-leads'); ?>"
    required
    data-wpwl-email
  >
  <button class="search-submit" type="submit" data-wpwl-submit>
    <?php _e('Submit', 'wp-week-leads'); ?>
  </button>
</form>
