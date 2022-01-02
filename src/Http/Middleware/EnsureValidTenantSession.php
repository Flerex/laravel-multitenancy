<?php

namespace Spatie\Multitenancy\Http\Middleware;

use Closure;
use Spatie\Multitenancy\Concerns\UsesMultitenancyConfig;
use Spatie\Multitenancy\Contracts\TenantContract;
use Symfony\Component\HttpFoundation\Response;

class EnsureValidTenantSession
{
    use UsesMultitenancyConfig;

    public function handle($request, Closure $next)
    {
        $sessionKey = 'ensure_valid_tenant_session_tenant_id';

        /** @var TenantContract $currentTenant */
        $currentTenant = app($this->currentTenantContainerKey());

        if (! $request->session()->has($sessionKey)) {
            $request->session()->put($sessionKey, $currentTenant->getKey());
            return $next($request);
        }

        if ($request->session()->get($sessionKey) !== $currentTenant->getKey()) {
            $this->handleInvalidTenantSession($request);
        }

        return $next($request);
    }

    protected function handleInvalidTenantSession($request)
    {
        abort(Response::HTTP_UNAUTHORIZED);
    }
}
