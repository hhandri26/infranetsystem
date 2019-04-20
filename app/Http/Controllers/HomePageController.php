<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePage;
Use App\Models\ArticleModels;

class HomePageController extends Controller
{
    
    public function __construct()
    {
        
    }
    public function index()
    {
        $data['info']       = HomePage::tableinfo();
        $data['slideshow']  = HomePage::slideshow();
        $data['section1']   = HomePage::section1();
        return view('home_page.home',$data);
    }


    public function about_us()
    {
        $data['info']       = HomePage::tableinfo();
        $data['about']      = HomePage::aboutus();
        return view('home_page.about_us',$data);
    }

    public function produk()
    {
        $data['info']       = HomePage::tableinfo();
        $data['prd']        = HomePage::product();
        return view('home_page.produk',$data);

    }

    public function artikel()
    {
        $data['info']       = HomePage::tableinfo();
        $data['art']        = ArticleModels::orderBy('sort', 'DESC')->where('active','1')->paginate(6);
        return view('home_page.article',$data);
    }

    public function article_single($id)
    {
        $data['info']       = HomePage::tableinfo();
        $data['art']        = ArticleModels::find($id);
        return view('home_page.single_article',$data);
    }

    public function pelatihan()
    {
        $data['info']       = HomePage::tableinfo();
        $data['catagories'] = HomePage::get_catagories_training();
        return view('home_page.pelatihan',$data);
    }

    public function detial_pelatihan($id)
    {
        $data['info']       = HomePage::tableinfo();
        $data['get']        = HomePage::get_single_training($id);
        $data['jadwal']     = HomePage::get_schedule($id);
        return view('home_page.detail_pelatihan',$data);
    }

    public function contact_us()
    {
        $data['info']       = HomePage::tableinfo();
        return view('home_page.contact_us',$data);
    }

    public function send_email()
    {
        return HomePage::send_email_ok();
    }
}
