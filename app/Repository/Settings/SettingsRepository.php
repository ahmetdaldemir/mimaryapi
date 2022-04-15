<?php


namespace App\Repository\Settings;


use App\Repository\BaseRepository;
use Illuminate\Support\Collection;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Setting;

class SettingsRepository extends BaseRepository implements SettingsRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param Setting $model
     */
    public function __construct(Setting $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
       $data["logo"] = $this->model::where("key","site.logo")->orderBy("id","desc")->limit(1)->first()->value;
       $data["title"] = $this->model::where("key","site.title")->orderBy("id","desc")->limit(1)->first()->value;
       $data["description"] = $this->model::where("key","site.description")->orderBy("id","desc")->limit(1)->first()->value;
       $data["phone"] = $this->model::where("key","site.phone")->orderBy("id","desc")->limit(1)->first()->value;
       $data["email"] = $this->model::where("key","site.email")->orderBy("id","desc")->limit(1)->first()->value;
       $data["address"] = $this->model::where("key","site.address")->orderBy("id","desc")->limit(1)->first()->value;
       $data["facebook"] = $this->model::where("key","site.facebook")->orderBy("id","desc")->limit(1)->first()->value;
       $data["instagram"] = $this->model::where("key","site.instagram")->orderBy("id","desc")->limit(1)->first()->value;
       $data["youtube"] = $this->model::where("key","site.youtube")->orderBy("id","desc")->limit(1)->first()->value;
       $data["catalog"] = $this->model::where("key","site.catalog")->orderBy("id","desc")->limit(1)->first()->value;
       $data['categorys'] = Category::all();
       return collect($data);
    }
}
