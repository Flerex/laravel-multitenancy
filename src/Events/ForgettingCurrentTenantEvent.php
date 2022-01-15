<?php

namespace Spatie\Multitenancy\Events;

use Spatie\Multitenancy\Contracts\TenantContract;

class ForgettingCurrentTenantEvent
{
    public function __construct(
        public TenantContract $tenant
    ) {
    }
}
