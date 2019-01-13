<?php
namespace Chanshige\WhoisProxy\Validation;

use Respect\Validation\Validator as v;

/**
 * Class ApiRoute
 *
 * @package Chanshige\WhoisProxy\Validation
 */
final class ApiRoute implements ValidatorInterface
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'type' => v::notEmpty()->alpha(),
            'domain' => v::notEmpty()->alnum('.-'),
        ];
    }
}