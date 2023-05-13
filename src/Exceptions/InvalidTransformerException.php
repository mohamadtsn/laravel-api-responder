<?php

namespace Mohamadtsn\Responder\Exceptions;

use Mohamadtsn\Responder\Transformers\Transformer;
use RuntimeException;

/**
 * An exception thrown when given invalid transformers.
 *
 * @package mohamadtsn/laravel-api-responder
 * @author  Mohamad Borzoyi <mohamad.borzoyi@gmail.com>
 * @license The MIT License
 */
class InvalidTransformerException extends RuntimeException
{
    /**
     * Construct the exception class.
     */
    public function __construct()
    {
        parent::__construct('Transformer must be a callable or an instance of [' . Transformer::class . '].');
    }
}