<?php

namespace Haitech\DevTool\Providers;

use Haitech\DevTool\Commands\LocaleCreateCommand;
use Haitech\DevTool\Commands\LocaleRemoveCommand;
use Haitech\DevTool\Commands\Make\ControllerMakeCommand;
use Haitech\DevTool\Commands\Make\FormMakeCommand;
use Haitech\DevTool\Commands\Make\ModelMakeCommand;
use Haitech\DevTool\Commands\Make\RepositoryMakeCommand;
use Haitech\DevTool\Commands\Make\RequestMakeCommand;
use Haitech\DevTool\Commands\Make\RouteMakeCommand;
use Haitech\DevTool\Commands\Make\TableMakeCommand;
use Haitech\DevTool\Commands\PackageCreateCommand;
use Haitech\DevTool\Commands\PackageRemoveCommand;
use Haitech\DevTool\Commands\RebuildPermissionsCommand;
use Haitech\DevTool\Commands\TestSendMailCommand;
use Haitech\DevTool\Commands\TruncateTablesCommand;
use Haitech\DevTool\Commands\PackageMakeCrudCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                TableMakeCommand::class,
                ControllerMakeCommand::class,
                RouteMakeCommand::class,
                RequestMakeCommand::class,
                FormMakeCommand::class,
                ModelMakeCommand::class,
                RepositoryMakeCommand::class,
                PackageCreateCommand::class,
                PackageMakeCrudCommand::class,
                PackageRemoveCommand::class,
                TestSendMailCommand::class,
                TruncateTablesCommand::class,
                RebuildPermissionsCommand::class,
                LocaleRemoveCommand::class,
                LocaleCreateCommand::class,
            ]);
        }
    }
}
