<?php namespace App\Repository\Sliders;


use App\Models\Slider;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;
use TCG\Voyager\Models\Page;

class SlidersRepository extends BaseRepository implements SlidersRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param Page $model
     */
    public function __construct(Slider $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        $x = $this->model::all();
        return collect($x);
    }
}
