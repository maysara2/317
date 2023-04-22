<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Project;
use App\Models\Service;
use App\Models\Service2;
use App\Models\Setting;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
         $ser2=Service2::orderByDesc('id')->limit(4)->get();
         $about=About::orderByDesc('id')->limit(1)->get();
         $project=Project::orderBy('id')->limit(4)->get();
         $ser=Service::orderBy('id')->limit(6)->get();
         $setting=Setting::orderByDesc('id')->limit(1)->get();

        return view('site.home',compact('ser2','setting','about','ser','project'));
    }

    public function project($id)
    {
        $project=Project::findOrfail($id);

         return view('site.project',compact('project'));
    }
    public function projects()
    {
        $lol = Project::all();
        return view('site\allpro',compact('lol'));
    }
    public function about()
    {
        $looly=About::orderByDesc('id')->limit(1)->get();
        return view('site.about',compact('looly'));
    }
    public function services()
    {
        $sis = Service2::all();
        $mom = Service::all();
        return view('site.services',compact('mom','sis'));
    }
    public function contact()
    {
        return view('site.content');
    }
  }

