<?php

namespace Hiraeth\Checkpoint;

use Hiraeth;
use Checkpoint;

/**
 *
 */
class ValidationProvider implements Hiraeth\Provider
{
	/**
	 * Get the interfaces for which the provider operates.
	 *
	 * @access public
	 * @return array A list of interfaces for which the provider operates
	 */
	static public function getInterfaces()
	{
		return [
			'Checkpoint\Validation'
		];
	}


	/**
	 * Prepare the instance.
	 *
	 * @access public
	 * @return Checkpoint\Validation The prepared instance
	 */
	public function __invoke($instance, Hiraeth\Broker $broker)
	{
		$instance->setValidator($broker->make('Respect\Validation\Validator'));

		return $instance;
	}
}
