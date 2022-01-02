<?php

namespace Spatie\Multitenancy\Contracts;

use Closure;
use Spatie\Multitenancy\TenantCollection;

interface TenantContract
{
    public function getKey();

    public function makeCurrent(): self;

    public function forget(): self;

    public static function current(): ?self;

    public static function checkCurrent(): bool;

    public function isCurrent(): bool;

    public static function forgetCurrent(): ?TenantContract;

    public function getDatabaseName(): string;

    public function newCollection(array $models = []): TenantCollection;

    public function execute(callable $callable);

    public function callback(callable $callable): Closure;
}
