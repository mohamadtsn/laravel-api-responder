<?php

namespace Mohamadtsn\Responder\Exceptions\Http;

/**
 * An exception thrown whan a user is unauthenticated. This exception replaces Laravel's
 * [\Illuminate\Auth\AuthenticationException].
 *
 * @package mohamadtsn/laravel-api-responder
 * @author  Mohamad Borzoyi <mohamad.borzoyi@gmail.com>
 * @license The MIT License
 */
class UnauthenticatedException extends HttpException
{
    /**
     * An HTTP status code.
     *
     * @var int
     */
    protected int $status = 401;

    /**
     * The error code.
     *
     * @var string|null
     */
    protected ?string $errorCode = 'unauthenticated';
}