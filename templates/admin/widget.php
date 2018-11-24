<?php
/**
 * @todo Add documentation.
 */
?>

<p>
  <label for="<?php esc_attr_e($data['title']['id']); ?>">
    <?php _e('Title:', 'wp-week-leads'); ?>
    <input
      id="<?php esc_attr_e($data['title']['id']); ?>"
      class="widefat"
      name="<?php esc_attr_e($data['title']['name']); ?>"
      value="<?php esc_attr_e($data['title']['value']); ?>"
      type="text"
    >
  </label>
</p>
