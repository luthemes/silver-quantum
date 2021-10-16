<?php
/**
 * Silver Quantum ( app/framework.php )
 *
 * This file is used to create a new framework instance and adds specific features to the theme.
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2014-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */

/**
 * Create a new framework instance
 *
 * This will create an instance of the framework allowing you to initialize the theme.
 */
$silver_quantum = new Benlumia007\Backdrop\Framework();

/**
 * Register default providers
 */
$silver_quantum->provider( Benlumia007\Backdrop\FontAwesome\Provider::class );
$silver_quantum->provider( Benlumia007\Backdrop\GoogleFonts\Provider::class );
$silver_quantum->provider( Benlumia007\Backdrop\Template\Hierarchy\Provider::class );
$silver_quantum->provider( Benlumia007\Backdrop\Template\Manager\Provider::class );
$silver_quantum->provider( Benlumia007\Backdrop\Template\View\Provider::class );

/**
 * Register Service Provider with the Framework
 */
$silver_quantum->provider( SilverQuantum\Menu\Provider::class );
$silver_quantum->provider( SilverQuantum\Sidebar\Provider::class );
// $silver_quantum->provider( SilverQuantum\ThemeLayouts\Provider::class );

/**
 * Boot the Framework
 */
$silver_quantum->boot();