<?php

namespace Mohamadtsn\Responder\Exceptions\Http;

/**
 * An exception thrown whan a page is not found.
 *
 * @package mohamadtsn/laravel-api-responder
 * @author  Mohamad Borzoyi <mohamad.borzoyi@gmail.com>
 * @license The MIT License
 */
class PageNotFoundException extends HttpException
{
    /**
     * An HTTP status code.
     *
     * @var int
     */
    protected int $status = 404;

    /**
     * An error code.
     *
     * @var string|null
     */
    protected ?string $errorCode = 'page_not_found';
}