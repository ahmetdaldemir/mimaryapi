<?php

namespace App\Providers;

use App\Repository\BaseRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\Pages\PagesRepository;
use App\Repository\Pages\PagesRepositoryInterface;
use App\Repository\Project\ProjectRepository;
use App\Repository\Project\ProjectRepositoryInterface;
use App\Repository\Settings\SettingsRepository;
use App\Repository\Settings\SettingsRepositoryInterface;
use App\Repository\Sliders\SlidersRepository;
use App\Repository\Sliders\SlidersRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(SettingsRepositoryInterface::class, SettingsRepository::class);
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
        $this->app->bind(PagesRepositoryInterface::class, PagesRepository::class);
        $this->app->bind(SlidersRepositoryInterface::class, SlidersRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
