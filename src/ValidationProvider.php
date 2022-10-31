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
	 * {@inheritDoc}
	 */
	static public function getInterfaces(): array
	{
		return [
			Checkpoint\Validation::class
		];
	}


	/**
	 * {@inheritDoc}
	 *
	 * @param Checkpoint\Validation $instance
	 */
	public function __invoke(object $instance, Hiraeth\Application $app): object
	{
		$instance->setValidator($app->get('Respect\Validation\Validator'));

		return $instance;
	}
}
