<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/index';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(
                    base_path('routes/web.php')
                );

            Route::middleware('web')
                ->group(
                    base_path('routes/admin/territories.php')
                );

            Route::middleware('web')
                ->group(
                    base_path('routes/admin/entities.php')
                );

            Route::middleware('web')
                ->group(
                    base_path('routes/admin/documents.php')
                );

            Route::middleware('web')
                ->group(
                    base_path('routes/admin/codes.php')
                );

            Route::middleware('web')
                ->group(
                    base_path('routes/admin/dropdowns.php')
                );

            Route::middleware('web')
                ->group(
                    base_path('routes/admin/users.php')
                );

            Route::middleware('web')
                ->group(
                    base_path('routes/admin/taxes.php')
                );

            Route::middleware('web')
                ->group(
                    base_path('routes/admin/images.php')
                );

            Route::middleware('web')
                ->group(
                    base_path('routes/admin/services.php')
                );

            Route::middleware('web')
                ->group(
                    base_path('routes/admin/permissions.php')
                );
        });
    }
}
