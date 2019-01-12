<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    private $modules = [
        'Question'
    ];

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->bindModules($this->modules);
    }

    private function bindService($module)
    {
        $serviceInterfacePath = "App\\Modules\\{$module}\\{$module}ServiceInterface";
        $servicePath = "App\\Modules\\{$module}\\{$module}Service";
        $this->app->singleton($serviceInterfacePath, $servicePath);
    }

    private function bindModules($modules)
    {
        foreach ($modules as $module) $this->bindService($module);
    }
}
