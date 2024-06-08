<?php

namespace App\Providers;

use Throwable;
use App\Http\Composers\cartComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer(['user.layouts.cart', 'user.layouts.checkout'], cartComposer::class);
    }

    
}
