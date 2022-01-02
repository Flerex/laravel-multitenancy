<?php

namespace Spatie\Multitenancy\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Multitenancy\Concerns\UsesTenantContract;
use Spatie\Multitenancy\Models\Concerns\UsesLandlordConnection;
use Spatie\Multitenancy\Contracts\TenantContract;

class Tenant extends Model implements TenantContract
{
    use UsesLandlordConnection, UsesTenantContract;
}
