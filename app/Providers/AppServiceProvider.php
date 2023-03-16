<?php

namespace App\Providers;

use App\Models\Transaction;
use Illuminate\Support\Facades\View;
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
    public function boot()
    {
        //
        $approvals = Transaction::where('updated_by', 'NOT LIKE', 'owner.create.approved')
            ->where('updated_by', 'NOT LIKE', 'owner.create.rejected')
            ->where('updated_by', 'NOT LIKE', 'owner.edit.approved')
            ->where('updated_by', 'NOT LIKE', 'owner.create.rejected')
            ->where('updated_by', 'NOT LIKE', 'owner.edit.rejected')
            ->where('updated_by', 'NOT LIKE', 'owner.delete.rejected')
            ->get();
        
        View::share('approvals', $approvals);
    }
}
