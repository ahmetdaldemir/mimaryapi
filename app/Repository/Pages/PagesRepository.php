<?php namespace App\Repository\Pages;


use App\Repository\BaseRepository;
use Illuminate\Support\Collection;
use TCG\Voyager\Models\Page;

class PagesRepository extends BaseRepository implements PagesRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param Page $model
     */
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }

    public function about(): Collection
    {
        $x = $this->model::where('id',2)->first();
        return collect($x);
    }
}
