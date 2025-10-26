<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Registrar rutas de API y web
        $this->mapRoutes();
    }

    /**
     * Método para mapear las rutas
     */
    protected function mapRoutes(): void
    {
        // Rutas API
        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));

        // Rutas Web
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    }
}
