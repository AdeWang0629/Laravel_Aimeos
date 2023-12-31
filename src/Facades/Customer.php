<?php

/**
 * @license MIT, http://opensource.org/licenses/MIT
 * @copyright Aimeos (aimeos.org), 2019-2023
 */


namespace Aimeos\Shop\Facades;


/**
 * Returns the customer frontend controller
 */
class Customer extends \Illuminate\Support\Facades\Facade
{
	/**
	 * Returns a new customer frontend controller object
	 *
	 * @return \Aimeos\Controller\Frontend\Customer\Iface
	 */
	protected static function getFacadeAccessor()
	{
		return 'aimeos.frontend.customer';
	}
}
