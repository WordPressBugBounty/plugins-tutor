<?php
/**
 * Toggle Switch (radio) button for settings.
 *
 * @package Tutor\Views
 * @subpackage Tutor\Settings
 * @author Themeum <support@themeum.com>
 * @link https://themeum.com
 * @since 2.0.0
 */

$field_key          = $field['key'];
$field_id           = 'field_' . $field_key;
$field_default      = $field['default'];
$field_label_title  = isset( $field['label_title'] ) ? $field['label_title'] : null;
$label_title        = ( isset( $field_label_title ) && null !== esc_attr( $field_label_title ) ) ? esc_attr( $field_label_title ) : null;
$default            = isset( $field_default ) ? esc_attr( $field_default ) : esc_attr( 'off' );
$option_value       = $this->get( esc_attr( $field_key ), $default );
$option_value       = ( isset( $option_value ) && 1 == $option_value || 'on' == $option_value ) ? 'on' : 'off';
$toggle_fields      = isset( $field['toggle_fields'] ) ? $field['toggle_fields'] : null;
$toggle_blocks      = isset( $field['toggle_blocks'] ) ? $field['toggle_blocks'] : null;
$has_control_button = empty( $field['has_control_button'] ) ? false : true;
$label_icon         = isset( $field['label_icon'] ) ? $field['label_icon'] : '';
?>
<div class="tutor-option-field-row" id="<?php echo esc_attr( $field_id ); ?>">
	<?php require tutor()->path . 'views/options/template/common/field_heading.php'; ?>
	<div class="tutor-option-field-input">
		<label class="tutor-form-toggle">
			<?php printf( "<span class='label-before'>%s</span>", esc_attr( $field_label_title ) ); ?>
			<input type="hidden" name="tutor_option[<?php echo esc_attr( $field_key ); ?>]" value="<?php echo esc_attr( $option_value ); ?>">
			<input type="checkbox" 
				<?php if ( ! $has_control_button && $toggle_fields ) : ?>
					data-toggle-fields="<?php echo esc_attr( $toggle_fields ); ?>" 
				<?php endif; ?>
				<?php if ( ! $has_control_button && $toggle_blocks ) : ?>
					data-toggle-blocks="<?php echo esc_attr( $toggle_blocks ); ?>" 
				<?php endif; ?>
				<?php checked( esc_attr( $option_value ), 'on' ); ?> 
				class="tutor-form-toggle-input">
			<span class="tutor-form-toggle-control"></span>
		</label>
		<?php if ( $has_control_button ) : ?>
		<button type="button" class="tutor-control-button">
			<input type="checkbox" 
				<?php if ( $toggle_fields ) : ?>
					data-toggle-fields="<?php echo esc_attr( $toggle_fields ); ?>" 
				<?php endif; ?>
				<?php if ( $toggle_blocks ) : ?>
					data-toggle-blocks="<?php echo esc_attr( $toggle_blocks ); ?>" 
				<?php endif; ?>
			>
			<i class="tutor-icon-slider-horizontal"></i>
		</button>
		<?php endif; ?>
	</div>
</div>
