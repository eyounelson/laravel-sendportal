<?php

declare(strict_types=1);

namespace SendPortal\Laravel\Concerns;

use SendPortal\Laravel\Http\Client;

/**
 * @mixin Client
 */
trait CanAccessProperties
{
    public function url(): string
    {
        return $this->url;
    }

    public function token(): string
    {
        return $this->token;
    }
}
