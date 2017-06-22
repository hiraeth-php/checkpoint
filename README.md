Checkpoint is a validation system which uses explicit "inspectors" to validate entities of mixed types.  Developers can create inspector classes which will run against entities/models, requests, or whatever they like.  Since the data provided to an inspector can be whatever you like, Checkpoint is as flexible for form validation as it is for model validation.  It uses [`respect/validation`](https://github.com/Respect/Validation) for the actual validation of data.

## Installation

```
composer require hiraeth/checkpoint
```

The `checkpoint.jin` configuration will be automatically copied to your `config` directory via [opus](https://github.com/imarc/opus).

## Delegates

No delegates are included in this package.

## Providers

| Operative Interface      | Provides
|--------------------------|-----------------------------------------------------------------------------
| `Checkpoint\Validation`  | `Respect\Validation\Validator`

## Usage

See [the Checkpoint documentation](https://github.com/imarc/checkpoint) for more information on how to create inspectors.
