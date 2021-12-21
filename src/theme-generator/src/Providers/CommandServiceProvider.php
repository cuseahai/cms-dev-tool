<?php

namespace Haitech\ThemeGenerator\Providers;

use Haitech\ThemeGenerator\Commands\ThemeCreateCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ThemeCreateCommand::class,
            ]);
        }
    }
}
