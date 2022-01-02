<?php

namespace Spatie\Multitenancy\Events;

use Spatie\Multitenancy\Contracts\TenantContract;

class MakingTenantCurrentEvent
{
    public function __construct(
        public TenantContract $tenant
    ) {
    }
}
