<?php namespace App\Repository\Project;


use App\Repository\BaseRepository;
use Illuminate\Support\Collection;
use TCG\Voyager\Models\Post;

class ProjectRepository extends BaseRepository implements ProjectRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param Post $model
     */
    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        // TODO: Implement all() method.
    }

    public function featured(): Collection
    {
      $x = Post::where('featured',TRUE)->first();
      return collect($x);
    }

    public function category($path): Collection
    {
        if($path == "devam-eden-projeler")
        {
            $x = Post::where('category_id',1)->get();
        }else if($path == "tamamlanan-projeler")
        {
            $x = Post::where('category_id',2)->get();
        }else{
            $x = Post::where('category_id',3)->get();
        }
        return collect($x);
    }

    public function get($slug): Collection
    {
        $x = Post::where('slug',$slug)->first();
        return collect($x);
    }
}
