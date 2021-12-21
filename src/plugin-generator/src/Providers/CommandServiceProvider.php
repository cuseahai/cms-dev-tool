<?php

namespace Haitech\PluginGenerator\Providers;

use Haitech\PluginGenerator\Commands\PluginCreateCommand;
use Haitech\PluginGenerator\Commands\PluginListCommand;
use Haitech\PluginGenerator\Commands\PluginMakeCrudCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PluginListCommand::class,
                PluginCreateCommand::class,
                PluginMakeCrudCommand::class,
            ]);
        }
    }
}
