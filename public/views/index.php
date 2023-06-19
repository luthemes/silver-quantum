<?php
/**
 * Default index template
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2014-2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */

// Loads header/*.php templates
Backdrop\View\display( 'header', Backdrop\Template\Hierarchy\hierarchy() );

// Loads content/*.php templates
Backdrop\View\display( 'content', Backdrop\Template\Hierarchy\hierarchy() );

// Loads footer/*.php templates
Backdrop\View\display( 'footer', Backdrop\Template\Hierarchy\hierarchy() );