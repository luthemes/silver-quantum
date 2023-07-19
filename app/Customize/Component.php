<?php
/**
 * Customize Component
 *
 * This file is used to create a new framework instance and adds specific features to the theme.
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2014-2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */

namespace SilverQuantum\Customize;
use Backdrop\Customize\Component as Customize;
use WP_Customize_Manager;

class Component implements Customize {

	public function boot() {
		add_action( 'customize_register', [ $this, 'panels' ] );
		add_action( 'customize_register', [ $this, 'sections' ] );
		add_action( 'customize_register', [ $this, 'settings' ] );
		add_action( 'customize_register', [ $this, 'controls' ] );
	}

	public function panels( WP_Customize_Manager $manager ) {

		$panels = [
			'theme_global'  => esc_html__( 'Theme: Global', 'silver-quantum' ),
			'theme_header'  => esc_html__( 'Theme: Header', 'silver-quantum' ),
			'theme_content' => esc_html__( 'Theme: Content', 'silver-quantum' ),
			'theme_footer'  => esc_html__( 'Theme: Footer', 'silver-quantum' )
		];

		foreach ( $panels as $panel => $label ) {
			$manager->add_panel( $panel, [
				'title'    => $label,
				'priority' => 100
			] );
		}
	}

	public function sections( WP_Customize_Manager $manager ) {

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Global
		/// ------------------------------------------------------------------------------------------------------------

		// Additional CSS
		$manager->get_section( 'custom_css' )->panel = 'theme_global';

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Header
		/// ------------------------------------------------------------------------------------------------------------

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Content
		/// ------------------------------------------------------------------------------------------------------------

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Footer
		/// ------------------------------------------------------------------------------------------------------------

		// Credit
		$manager->add_section( 'theme_footer_credit', [
			'title' => esc_html__( 'Credit', 'silver-quantum' ),
			'panel' => 'theme_footer'
		] );
	}

	public function settings( WP_Customize_Manager $manager ) {

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Global
		/// ------------------------------------------------------------------------------------------------------------

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Header
		/// ------------------------------------------------------------------------------------------------------------

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Content
		/// ------------------------------------------------------------------------------------------------------------

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Footer
		/// ------------------------------------------------------------------------------------------------------------

		// Credit
		$manager->add_setting( 'theme_footer_credit', [
			'default' => 'Proudly powered by <a href="https://wordpress.org">WordPress</a>',
			'sanitize_callback' => 'wp_kses_post',
		] );
	}

	public function controls( WP_Customize_Manager $manager ) {

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Global
		/// ------------------------------------------------------------------------------------------------------------

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Header
		/// ------------------------------------------------------------------------------------------------------------

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Content
		/// ------------------------------------------------------------------------------------------------------------

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Footer
		/// ------------------------------------------------------------------------------------------------------------


		$manager->add_control( 'theme_footer_credit', [
			'label' => esc_html__( 'Credit', 'silver-quantum' ),
			'type' => 'textarea',
			'section' => 'theme_footer_credit'
		] );
	}
}
