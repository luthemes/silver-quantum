<?php
/**
 * Layouts
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2014-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */

/**
 * Define namespace
 */
namespace SilverQuantum\Customize\Layouts;

use SilverQuantum\Customize\Layouts\Control\ImageRadio;
use Backdrop\Theme\Customize\Component as Customize;
use WP_Customize_Manager;

class Component extends Customize {

    public function panels( WP_Customize_Manager $manager ): void {
		
		$manager->add_panel( 'theme_options', [
            'title' => esc_html( 'Theme Options', 'silver-quantum' ),
			'priority' => 5,
        ] );
    }

    public function sections( WP_Customize_Manager $manager ): void {
        $manager->add_section( 'global_layout', [
            'title'    => esc_html__( 'Global Layout', 'silver-quantum' ),
			'panel'    => 'theme_options',
			'priority' => 5,
        ] );
    }

    public function settings( WP_Customize_Manager $manager ): void {
        $manager->add_setting( 'global_layout', [
            'default'           => 'left-sidebar', 
            'sanitize_callback' => 'Backdrop\Theme\Customize\Helpers\Sanitize::layouts',
        ] );
    }

    public function controls( WP_Customize_Manager $manager ): void {
        $manager->add_control(
			new ImageRadio(
				$manager,
				'global_layout', [
					'description' => esc_html__( 'General Layout applies to all layouts that supports in this theme.', 'silver-quantum' ),
					'section'     => 'global_layout',
					'settings'    => 'global_layout',
					'type'        => 'radio-image',
					'choices'     => [
                            'left-sidebar'  => get_theme_file_uri( '/public/images/2cl.png' ),
                            'right-sidebar' => get_theme_file_uri( '/public/images/2cr.png' ),
                            'no-sidebar'    => get_theme_file_uri( '/public/images/1col.png' ),
						],
				]
			)
		);
    }
}