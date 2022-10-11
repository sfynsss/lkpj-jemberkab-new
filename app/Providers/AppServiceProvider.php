<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

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
    public function boot()
    {
        Schema::defaultStringLength(191); //Update defaultStringLength

        Blade::directive('currency', function ($expression) {
            return "<?php echo number_format($expression, 0, ',', '.'); ?>";
        });

        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
    }
}
