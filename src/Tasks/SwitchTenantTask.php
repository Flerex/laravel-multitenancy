<?php

namespace Spatie\Multitenancy\Tasks;

use Spatie\Multitenancy\Contracts\TenantContract;

interface SwitchTenantTask
{
    public function makeCurrent(TenantContract $tenant): void;

    public function forgetCurrent(): void;
}
