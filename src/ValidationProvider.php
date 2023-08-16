<?php

namespace Hiraeth\Checkpoint;

use Hiraeth;
use Checkpoint;
use Respect\Validation\Validator;

/**
 *
 */
class ValidationProvider implements Hiraeth\Provider
{
	/**
	 * @var Validator
	 */
	protected $validator = NULL;


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
		if (!$this->validator) {
			$this->validator = new Validator();
		}

		$instance->setValidator($this->validator);

		return $instance;
	}
}
