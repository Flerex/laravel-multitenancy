<?php

namespace Spatie\Multitenancy\Events;

use Spatie\Multitenancy\Contracts\TenantContract;

class MadeTenantCurrentEvent
{
    public function __construct(
        public TenantContract $tenant
    ) {
    }
}
