<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator; // Thêm dòng này
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
    // public function boot(): void
    // {
    //     //
    //     view()->composer('*', \App\Http\View\Composers\CategoryComposer::class);
    // }
    public function boot(): void
    {
        // Cấu hình hiện tại để sử dụng CategoryComposer cho tất cả views
        view()->composer('*', \App\Http\View\Composers\CategoryComposer::class);

        // Thêm cấu hình phân trang tùy chỉnh
        Paginator::defaultView('vendor.pagination.custom'); // Sửa lại đường dẫn cho phù hợp
    }
}
