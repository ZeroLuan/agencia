<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SiteBanner;
use App\Models\SiteServico;

class HomeController extends Controller
{
    public function index(){
        $site_banner = SiteBanner::all();
        $site_servicos = SiteServico::all();

        return view('home',[
         'site_banner'=>$site_banner,
         'site_servicos' => $site_servicos
        ]);
    }
}
