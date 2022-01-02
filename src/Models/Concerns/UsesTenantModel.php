<?php

namespace Spatie\Multitenancy\Models\Concerns;


use Spatie\Multitenancy\Contracts\TenantContract;

trait UsesTenantModel
{
    public function getTenantModel(): TenantContract
    {
        $tenantModelClass = config('multitenancy.tenant_model');

        return new $tenantModelClass();
    }
}
