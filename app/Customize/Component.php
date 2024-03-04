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
use SilverQuantum\Tools\Mod;
use WP_Customize_Manager;

use SilverQuantum\Template\Footer;

class Component extends Customize {

	public function sections( WP_Customize_Manager $manager ) {

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Global
		/// ------------------------------------------------------------------------------------------------------------

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Header
		/// ------------------------------------------------------------------------------------------------------------

		$manager->get_section( 'header_image')->panel = 'theme_header';
		$manager->get_section( 'header_image' )->priority = 201;

		$manager->get_section( 'title_tagline' )->panel = 'theme_header';
		$manager->get_section( 'title_tagline' )->title = esc_html__( 'Branding', 'silver-quantum' );

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

		// Register footer settings.
		$manager->add_setting( 'theme_footer_powered_by', [
			'default'           => ( new Mod() )->fallback( 'theme_footer_powered_by' ),
			'sanitize_callback' => 'wp_validate_boolean',
		] );

		$manager->add_setting( 'theme_footer_custom_credit', [
			// Translators: %s is the theme link.
			'default'           => ( new Mod() )->fallback( 'theme_footer_custom_credit' ),
			'sanitize_callback' => function( $value ) {
				return wp_kses( $value, ( new Footer() )->allowedTags() );
			},
		] );
	}

	public function controls( WP_Customize_Manager $manager ) {

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Global
		/// ------------------------------------------------------------------------------------------------------------

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Header
		/// ------------------------------------------------------------------------------------------------------------

		$manager->get_control( 'header_textcolor' )->section = 'theme_header';
		$manager->get_control( 'header_textcolor' )->label = esc_html__( 'Header: Site Title', 'silver-quantum' );
		$manager->get_control( 'header_textcolor' )->priority = 10;

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Content
		/// ------------------------------------------------------------------------------------------------------------

		/// ------------------------------------------------------------------------------------------------------------
		///  Theme: Footer
		/// ------------------------------------------------------------------------------------------------------------

		// Powered by control.
		$manager->add_control( 'theme_footer_powered_by', [
			'section'  => 'theme_footer_credit',
			'type'     => 'checkbox',
			'label'    => __( 'Show random "powered by" credit text.', 'silver-quantum' )
		] );

		// Footer credit control.
		$manager->add_control( 'theme_footer_custom_credit', [
			'section'         => 'theme_footer_credit',
			'type'            => 'textarea',
			'label'           => __( 'Custom Footer Text', 'silver-quantum' ),
			'active_callback' => function( $control ) {
				return ! $control->manager->get_setting( 'theme_footer_powered_by' )->value();
			}
		] );
	}
}
