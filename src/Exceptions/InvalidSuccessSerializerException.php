<?php

namespace Mohamadtsn\Responder\Exceptions;

use League\Fractal\Serializer\SerializerAbstract;
use RuntimeException;

/**
 * An exception thrown when given invalid serializers.
 *
 * @package mohamadtsn/laravel-api-responder
 * @author  Mohamad Borzoyi <mohamad.borzoyi@gmail.com>
 * @license The MIT License
 */
class InvalidSuccessSerializerException extends RuntimeException
{
    /**
     * Construct the exception class.
     */
    public function __construct()
    {
        parent::__construct('Serializer must be an instance of [' . SerializerAbstract::class . '].');
    }
}