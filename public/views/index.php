<?php
/**
 * Default index template
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2014-2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */

// Load header/*.php template.
Backdrop\Template\View\display( 'header', Backdrop\Template\Hierarchy\hierarchy() );

// Load content/*.php template
Backdrop\Template\View\display( 'content', Backdrop\Template\Hierarchy\hierarchy() );

// Load footer/*.php template
Backdrop\Template\View\display( 'footer', Backdrop\Template\Hierarchy\hierarchy() );