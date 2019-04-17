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
	static public function getInterfaces(): array
	{
		return [
			Checkpoint\Validation::class
		];
	}


	/**
	 * Prepare the instance.
	 *
	 * @access public
	 * @var object $instance The unprepared instance of the object
	 * @param Hiraeth\Application $app The application instance for which the provider operates
	 * @return object The prepared instance
	 */
	public function __invoke(object $instance, Hiraeth\Application $app): object
	{
		$instance->setValidator($app->get('Respect\Validation\Validator'));

		return $instance;
	}
}
