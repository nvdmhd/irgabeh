<?php
/**
 * Form Submissions Metabox options.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       https://avada.com
 * @package    fusion-builder
 * @subpackage forms
 */

/**
 * Form Submissions page settings
 *
 * @param array $sections An array of our sections.
 * @return array
 */
function avada_page_options_tab_form_confirmation( $sections ) {
	$sections['form_confirmation'] = [
		'label'    => esc_html__( 'Confirmation', 'Avada' ),
		'alt_icon' => 'fusiona-confirmation',
		'id'       => 'form_confirmation',
		'fields'   => [
			'form_confirmation_type' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Form Confirmation Type', 'Avada' ),
				'description' => esc_html__( 'Select what should happen after the form is submitted successfully.', 'Avada' ),
				'id'          => 'form_confirmation_type',
				'default'     => 'message',
				'choices'     => [
					'message'  => esc_html__( 'Display Message', 'Avada' ),
					'redirect' => esc_html__( 'Redirect To URL', 'Avada' ),
				],
				'dependency'  => [],
				'transport'   => 'postMessage',
				'events'      => [
					'fusion-render-form-notices',
				],
			],
			'messages'               => [
				'type'        => 'custom',
				'label'       => '',
				'description' => '<div class="fusion-redux-important-notice">' . __( '<strong>IMPORTANT NOTE:</strong> Use the <strong>Notice Element</strong> in the Form Builder to display confirmation notices for your form upon submission.', 'Avada' ) . '</div>',
				'id'          => 'messages',
				'dependency'  => [
					[
						'field'      => 'form_confirmation_type',
						'value'      => 'message',
						'comparison' => '==',
					],
				],
			],
			'redirect_url'           => [
				'type'        => 'text',
				'label'       => esc_html__( 'Redirect URL', 'Avada' ),
				'description' => esc_html__( 'Enter the URL which the user should be redirected to after a successful submission.', 'Avada' ),
				'id'          => 'redirect_url',
				'transport'   => 'postMessage',
				'dependency'  => [
					[
						'field'      => 'form_confirmation_type',
						'value'      => 'message',
						'comparison' => '!=',
					],
				],
			],

		],
	];
	return $sections;
}
