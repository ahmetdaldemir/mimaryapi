<?php
namespace App\Repository\Settings;

use Illuminate\Support\Collection;

interface SettingsRepositoryInterface
{
    public function all(): Collection;

}
