<?php

namespace App\Providers;

use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Setting;
use App\View\Components\Form\InputFile;
use App\View\Components\Form\InputText;
use App\View\Components\Form\SelectBox;
use App\View\Components\Form\TextArea;
use App\View\Components\Index\Add;
use App\View\Components\Index\Back;
use App\View\Components\Index\CategoryDeleteModal;
use App\View\Components\Index\DeleteModal;
use App\View\Components\Index\Modal;
use App\View\Components\Index\Save;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        Paginator::useBootstrap();
        Carbon::setLocale(config('app.locale'));
        URL::forceScheme('https');
        Blade::component('form-inputtext', InputText::class);
        Blade::component('form-select', SelectBox::class);
        Blade::component('form-textarea', TextArea::class);
        Blade::component('form-file', InputFile::class);
        Blade::component('modal', Modal::class);
        Blade::component('delete-modal', DeleteModal::class);
        Blade::component('delete-cat-modal', CategoryDeleteModal::class);
        Blade::component('back', Back::class);
        Blade::component('save', Save::class);
        Blade::component('add', Add::class);


        define('SWEETALERT_MESSAGE_CREATE', 'Eklendi');
        define('SWEETALERT_MESSAGE_UPDATE', 'Güncellendi');
        define('SWEETALERT_MESSAGE_DELETE', 'Silindi');
        define('MAIL_SEND', 'info@westerparkstudio.nl');


        Paginator::useBootstrap();
        config()->set('settings', Setting::pluck('value','item')->all());

        View::share([
            'services' => Service::all(),
            'servicecategories' => ServiceCategory::all(),
            'categories' => ProductCategory::all()

        ]);
    }
}
