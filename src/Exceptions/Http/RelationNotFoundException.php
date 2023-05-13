<?php

namespace Mohamadtsn\Responder\Exceptions\Http;

/**
 * An exception thrown whan a relation is not found.
 *
 * @package mohamadtsn/laravel-api-responder
 * @author  Mohamad Borzoyi <mohamad.borzoyi@gmail.com>
 * @license The MIT License
 */
class RelationNotFoundException extends HttpException
{
    /**
     * An HTTP status code.
     *
     * @var int
     */
    protected int $status = 422;

    /**
     * An error code.
     *
     * @var string|null
     */
    protected ?string $errorCode = 'relation_not_found';
}