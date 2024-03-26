<?php

namespace App\Providers;

use App\Models\Setting;
use App\View\Components\Form\InputEmail;
use App\View\Components\Form\InputFile;
use App\View\Components\Form\InputPassword;
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
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Paginator::useBootstrap();
        Carbon::setLocale(config('app.locale'));
        config()->set('settings', Setting::pluck('value','item')->all());
        URL::forceScheme('https');

        define('SWEETALERT_MESSAGE_CREATE', 'Eklendi');
        define('SWEETALERT_MESSAGE_UPDATE', 'Güncellendi');
        define('SWEETALERT_MESSAGE_DELETE', 'Silindi');
        define('CARGO_LIMIT', 200);
        define('CARGO_PRICE', 17.90);

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

    }
}
