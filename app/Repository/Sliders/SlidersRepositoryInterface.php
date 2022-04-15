<?php namespace App\Repository\Sliders;

 use Illuminate\Support\Collection;

interface SlidersRepositoryInterface
{
    public function all(): Collection;

}
