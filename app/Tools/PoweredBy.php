<?php
/**
 * Powered By Text Class.
 *
 * A simple class for randomly displaying a "powered by..." line of text in the
 * theme footer.
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2014 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */

namespace SilverQuantum\Tools;

/**
 * Powered by class.
 *
 * @since  1.0.0
 * @access public
 */
class PoweredBy {

	/**
	 * Returns an array of all the powered by quotes.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function all() {

		return apply_filters( 'silver-quantum/poweredby/collection', [
			esc_html__( 'Powered by heart and soul.', 'silver-quantum' ),
			esc_html__( 'Powered by crazy ideas and passion.', 'silver-quantum' ),
			esc_html__( 'Powered by the thing that holds all things together in the universe.', 'silver-quantum' ),
			esc_html__( 'Powered by love.', 'silver-quantum' ),
			esc_html__( 'Powered by the vast and endless void.', 'silver-quantum' ),
			esc_html__( 'Powered by the code of a maniac.', 'silver-quantum' ),
			esc_html__( 'Powered by peace and understanding.', 'silver-quantum' ),
			esc_html__( 'Powered by coffee.', 'silver-quantum' ),
			esc_html__( 'Powered by sleepness nights.', 'silver-quantum' ),
			esc_html__( 'Powered by the love of all things.', 'silver-quantum' ),
			esc_html__( 'Powered by something greater than myself.', 'silver-quantum' ),
			esc_html__( 'Powered by whispers from the future.', 'silver-quantum' ),
			esc_html__( 'Powered by the fusion of technology and dreams.', 'silver-quantum' ),
			esc_html__( 'Powered by the strength found in kindness.', 'silver-quantum' ),
			esc_html__( 'Powered by the melodies of the unseen world.', 'silver-quantum' ),
			esc_html__( 'Powered by the courage of the unheard voices.', 'silver-quantum' ),
			esc_html__( 'Powered by the beauty of the human spirit.', 'silver-quantum' ),
			esc_html__( 'Powered by the quest for eternal wisdom.', 'silver-quantum' ),
			esc_html__( 'Powered by the energy of uncharted galaxies.', 'silver-quantum' ),
			esc_html__( 'Powered by the magic hidden in plain sight.', 'silver-quantum' ),
			esc_html__( 'Powered by the legacy of the ancients.', 'silver-quantum' ),
			esc_html__( 'Powered by the dance between light and darkness.', 'silver-quantum' ),
			esc_html__( 'Powered by the touch of the morning sun.', 'silver-quantum' ),
			esc_html__( 'Powered by the secrets of the deep ocean.', 'silver-quantum' ),
			esc_html__( 'Powered by the echoes of laughter and joy.', 'silver-quantum' ),
			esc_html__( 'Powered by the relentless pursuit of truth.', 'silver-quantum' ),
		] );
	}

	/**
	 * Displays a random powered by quote.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function display() {
		echo esc_html( $this->render() );
	}

	/**
	 * Returns a random powered by quote.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function render() {
		$collection = $this->all();

		return $collection[ array_rand( $collection, 1 ) ];
	}
}
