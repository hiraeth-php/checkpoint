Checkpoint is a validation system which uses explicit "inspectors" to validate entities of mixed types.  Developers can create inspector classes which will run against entities/models, requests, or whatever they like.  Since the data provided to an inspector can be whatever you like, Checkpoint is as flexible for form validation as it is for model validation.  It uses [`respect/validation`](https://github.com/Respect/Validation) for the actual validation of data.

This package includes a provider for the `Checkpoint\Validation` interface which will automatically wire inspectors with the required `Respect\Validation\Validator`.

## Installation

```
composer require hiraeth/checkpoint
```

## Usage

Once the package is installed, the `Hiraeth\Checkpoint\ValidationProvider` should be automatically registered with the system via the `config/checkpoint.jin` file copied at installation time.  All you need to do to begin using checkpoint is create your inspectors.  Below is an example inspector from this site:

```php
namespace Hiraeth\App;

use Checkpoint;

class UserInspector extends Checkpoint\Inspector
{
	protected function validate($user)
	{
		$this->check('login', $user->login, ['notBlank']);
		$this->check('fullName', $user->fullName, ['notBlank']);
	}
}
```

Now anywhere that our `Hiraeth\App\UserInspector` is depenency injected, it will be automatically wired with the validator.

For more information on how to create an use inspectors, see [the Checkpoint documentation](https://github.com/imarc/checkpoint).
