<?php

namespace Spatie\Multitenancy;

class Landlord
{
    public static function execute(callable $callable)
    {
        $tenantClass = config('multitenancy.tenant_model');
        $originalCurrentTenant = $tenantClass::current();

        $tenantClass::forgetCurrent();

        $result = $callable();

        $originalCurrentTenant?->makeCurrent();

        return $result;
    }
}
