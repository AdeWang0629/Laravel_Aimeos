<?php

/**
 * @license MIT, http://opensource.org/licenses/MIT
 * @copyright Aimeos (aimeos.org), 2019-2023
 */


namespace Aimeos\Shop\Facades;


/**
 * Returns the supplier frontend controller
 */
class Supplier extends \Illuminate\Support\Facades\Facade
{
	/**
	 * Returns a new supplier frontend controller object
	 *
	 * @return \Aimeos\Controller\Frontend\Supplier\Iface
	 */
	protected static function getFacadeAccessor()
	{
		return 'aimeos.frontend.supplier';
	}
}
