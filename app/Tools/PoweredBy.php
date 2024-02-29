<?php
/**
 * Powered By Text Class.
 *
 * A simple class for randomly displaying a "powered by..." line of text in the
 * theme footer.
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu <benlumia007@gmail.com
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
	public static function all() {

		return apply_filters( 'silver/quantum/poweredby/collection', [
			__( 'Powered by heart and soul.', 'silver-quantum' ),
			__( 'Powered by crazy ideas and passion.', 'silver-quantum' ),
			__( 'Powered by the thing that holds all things together in the universe.', 'silver-quantum' ),
			__( 'Powered by love.', 'silver-quantum' ),
			__( 'Powered by the vast and endless void.', 'silver-quantum' ),
			__( 'Powered by the code of a maniac.', 'silver-quantum' ),
			__( 'Powered by peace and understanding.', 'silver-quantum' ),
			__( 'Powered by coffee.', 'silver-quantum' ),
			__( 'Powered by sleepness nights.', 'silver-quantum' ),
			__( 'Powered by the love of all things.', 'silver-quantum' ),
			__( 'Powered by something greater than myself.', 'silver-quantum' )
		] );
	}

	/**
	 * Displays a random powered by quote.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public static function display() {
		
		echo esc_html( static::render() );
	}

	/**
	 * Returns a random powered by quote.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public static function render() {

		$collection = static::all();

		return $collection[ array_rand( $collection, 1 ) ];
	}
}