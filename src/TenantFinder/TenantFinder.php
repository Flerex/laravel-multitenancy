<?php

namespace Spatie\Multitenancy\TenantFinder;

use Illuminate\Http\Request;
use Spatie\Multitenancy\Contracts\TenantContract;

abstract class TenantFinder
{
    abstract public function findForRequest(Request $request): ?TenantContract;
}
