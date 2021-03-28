<?php
/**
 * Silver Quantum ( app/framework.php )
 *
 * This file is used to create a new framework instance and adds specific features to the theme.
 *
 * @package   Silver Quantum
 * @copyright Copyright (C) 2014-2021. Benjamin Lu
 * @license   GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */

/**
 * Create a new framework instance
 *
 * This will create an instance of the framework allowing you to initialize the theme.
 */
$silver_quantum = new Benlumia007\Backdrop\Framework();

/**
 * Register Service Provider with the Framework
 */
$silver_quantum->provider( SilverQuantum\Menu\Provider::class );
$silver_quantum->provider( SilverQuantum\Sidebar\Provider::class );


/**
 * Boot the Framework
 */
$silver_quantum->boot();