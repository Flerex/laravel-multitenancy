<?php

namespace Spatie\Multitenancy\Events;

use Spatie\Multitenancy\Contracts\TenantContract;

class ForgotCurrentTenantEvent
{
    public function __construct(
        public TenantContract $tenant
    ) {
    }
}
