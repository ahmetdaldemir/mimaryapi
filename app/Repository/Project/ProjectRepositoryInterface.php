<?php namespace App\Repository\Project;

 use Illuminate\Support\Collection;

interface ProjectRepositoryInterface
{
    public function all(): Collection;
    public function featured(): Collection;
    public function get($slug): Collection;

}
