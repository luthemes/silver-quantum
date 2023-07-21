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

use Backdrop\Customize\Controls\RadioImage;
use Backdrop\Customize\Component as Customize;
use function Backdrop\Mix\asset;
use WP_Customize_Manager;

class Component implements Customize {

	public function boot() {
		add_action( 'customize_register', [ $this, 'sections' ] );
		add_action( 'customize_register', [ $this, 'settings' ] );
		add_action( 'customize_register', [ $this, 'controls' ] );
		add_action( 'customize_controls_enqueue_scripts', [ $this, 'enqueue' ] );
	}

    public function panels( WP_Customize_Manager $manager ) {}

    public function sections( WP_Customize_Manager $manager ) {
        $manager->add_section( 'global_layout', [
            'title'    => esc_html__( 'Global Layout', 'silver-quantum' ),
			'panel'    => 'theme_content',
			'priority' => 5,
        ] );
    }

    public function settings( WP_Customize_Manager $manager ) {
        $manager->add_setting( 'global_layout', [
            'default'           => 'left-sidebar',
            'sanitize_callback' => 'Backdrop\Customize\Helpers\Sanitize::layouts',
        ] );
    }

    public function controls( WP_Customize_Manager $manager ) {
        $manager->add_control(
			new RadioImage(
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

	public function enqueue() {
		wp_enqueue_script( 'silver-quantum-customize-controls', asset( 'assets/js/customize-controls.js' ), [ 'jquery' ], null, true );
		wp_enqueue_style(  'silver-quantum-customize-controls', asset( 'assets/css/customize-controls.css' ), null, null );
	}
}
