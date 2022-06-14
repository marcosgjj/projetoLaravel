<?php

namespace App\Providers;

use App\Charts\ProdutosPreco;
use ConsoleTVs\Charts\Registrar;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Registrar $charts)
    {
        Schema::defaultStringLength(191);
        $charts->register([ProdutosPreco::class]);
    }
}
