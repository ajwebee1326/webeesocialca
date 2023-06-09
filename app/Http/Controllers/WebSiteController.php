<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use App\Models\OurWork;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\OurClient;

class WebSiteController extends Controller
{
    public $meta;

    public function __construct()
    {
        $url = Route::current()->uri();
        $meta = Meta::where('url',$url)->first();
        if($meta){
            $this->meta = $meta;
        }else{
            $this->meta = new Meta();
        }
    }
    
    public function viewIndex(){
        $clients_left = OurClient::where('position','left')->get();
        $clients_right = OurClient::where('position','right')->get();
        return view('frontend.index', ['meta'=>$this->meta,'clients_left'=>$clients_left,'clients_right'=>$clients_right]);
    }

    public function viewAbout(){
        
        return view('frontend.about-us', ['meta'=>$this->meta]);
    }

    public function viewGetintouch(){

        return view('frontend.getin-touch', ['meta'=>$this->meta]);
    }

    public function viewWorkWithUs(){

        return view('frontend.work-with-us', ['meta'=>$this->meta]);
    }
    
    public function viewBlog(){
        $blogs = Blog::orderBy('id','desc')->paginate(6);
        // $blogs->withPath('/blog/page');
        return view('frontend.blog', ['meta'=> $this->meta,'blogs'=>$blogs]);
    }

    public function viewBlogDetails(Blog $blog){
        $recent_blogs = Blog::where('id','!=',$blog->id)->orderBy('id','desc')->take(5)->get();
        return view('frontend.blog-details', ['meta'=> $this->meta,'blog'=>$blog,'recent_blogs'=>$recent_blogs]);
    }

    public function viewOurClients(){
    
        return view('frontend.ourclients', ['meta'=> $this->meta]);
    }

    public function viewOurWork(){

        $categories = Category::all();
        $ourwork = OurWork::all();
      
        return view('frontend.ourwork', ['meta'=> $this->meta], ['ourworks' => $ourwork,'categories' =>$categories]);
    }

    public function viewOurworkDetails(OurWork $ourWork)
    {
        //$ourWork = OurWork::where('id',)
        return view('frontend.ourwork-details', ['meta'=> $this->meta,'ourwork'=>$ourWork]);

    }


    // Our Services Controller section start here

    public function viewsocialmediamarketing(){
        
        return view('frontend.social-media-marketing', ['meta'=> $this->meta]);
    }

    public function viewwebsitedevelopment(){
        
        return view('frontend.website-development', ['meta'=> $this->meta]);
    }

    public function viewEmailMarketing(){
        
        return view('frontend.email-marketing', ['meta'=> $this->meta]);
    }

    public function viewDesignCopywriting(){
        
        return view('frontend.design-and-copywriting', ['meta'=> $this->meta]);
    }

    public function ViewPerformanceMarketing(){
        
        return view('frontend.performance-marketing', ['meta'=> $this->meta]);
    }

    public function viewSeoAgency(){
        
        return view('frontend.seo-agency', ['meta'=> $this->meta]);
    }

    public function viewMobileApplication(){
        
        return view('frontend.mobile-development', ['meta'=> $this->meta]);
    }

    public function viewMetaverseDevelopment(){
        
        return view('frontend.metaverse-development', ['meta'=> $this->meta]);
    }

    
}
