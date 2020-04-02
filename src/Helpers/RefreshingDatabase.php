<?php

declare(strict_types=1);

namespace KrzysztofRewak\Larahat\Helpers;

trait RefreshingDatabase
{
    /**
     * @beforeScenario
     */
    public function refreshDatabase(): void
    {
        app("Illuminate\Contracts\Console\Kernel")->call("migrate");
    }
}
