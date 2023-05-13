<?php

namespace Mohamadtsn\Responder\Exceptions\Http;

/**
 * An exception thrown whan a user is unauthorized. This exception replaces Laravel's
 * [\Illuminate\Auth\Access\AuthorizationException].
 *
 * @package mohamadtsn/laravel-api-responder
 * @author  Mohamad Borzoyi <mohamad.borzoyi@gmail.com>
 * @license The MIT License
 */
class UnauthorizedException extends HttpException
{
    /**
     * An HTTP status code.
     *
     * @var int
     */
    protected int $status = 403;

    /**
     * An error code.
     *
     * @var string|null
     */
    protected ?string $errorCode = 'unauthorized';
}