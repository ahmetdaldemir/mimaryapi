<?php namespace App\Http\Controllers;



use App\Repository\Pages\PagesRepositoryInterface;
use App\Repository\Project\ProjectRepositoryInterface;
use App\Repository\Settings\SettingsRepositoryInterface;
use App\Repository\Sliders\SlidersRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Models\Category;

class MainController extends Controller
{

    private $settingsRepository;
    private $projectRepository;
    private $pagesRepository;

    public function __construct(
        SettingsRepositoryInterface $settingsRepository,
        ProjectRepositoryInterface $projectRepository,
        PagesRepositoryInterface $pagesRepository,
        SlidersRepositoryInterface $slidersRepository
    )
    {
        $this->settingsRepository = $settingsRepository;
        $this->projectRepository = $projectRepository;
        $this->pagesRepository = $pagesRepository;
        $this->slidersRepository = $slidersRepository;
    }

    public function index()
    {
        $settings = $this->settingsRepository->all();
        $sliders = $this->slidersRepository->all();
         $projectfeatured = $this->projectRepository->featured();

        return view('pages.home',compact('settings','projectfeatured','sliders'));
    }
    public function about()
    {
        $settings = $this->settingsRepository->all();
        $page = $this->pagesRepository->about();

        return view('pages.about',compact('settings','page'));
    }

    public function contact()
    {
        $settings = $this->settingsRepository->all();

        return view('pages.contact',compact('settings'));
    }

    public function project()
    {
        $path = request()->path();
        $projects =$this->projectRepository->category($path);
        $settings = $this->settingsRepository->all();
        $category = Category::where('slug',$path)->first();

        return view('pages.project',compact('settings','projects','category'));
    }

    public function projectdetail($slug)
    {
        $path = request()->path();
        $project =$this->projectRepository->get($slug);
        $settings = $this->settingsRepository->all();
        return view('pages.detail',compact('settings','project'));
    }

    public function mailsend(Request $request)
    {
        $data = [];
        Mail::send('mail', $data, function($message,$request) {
            $message->to('info@mimar-yapi.com', 'Mimar Yapı')->subject
            ('Siteden Mail Geldi');
            $message->from($request->your_email,$request->your_name);
        });
        return redirect()->back();
    }
}
