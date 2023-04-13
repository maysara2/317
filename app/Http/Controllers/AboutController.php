<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about=About::all();
        return view('admin.Abouts.index',compact('about'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $about=new About();
        return view('admin.Abouts.create',compact('about'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

   {
         $request->validate([

            'bigtitle_en'=>'required',
             'bigtitle_ar'=>'required',
             'bigcontent_en'=>'required',
             'bigcontent_ar'=>'required',
             'stitle_en'=>'required',
             'stitle_ar'=>'required',
             'stitle_en1'=>'required',
             'stitle_ar1'=>'required',

             'scontent_en'=>'required',
             'scontent_ar'=>'required',
            'scontent_en1'=>'required',
            'scontent_ar1'=>'required',


        ]);
        $img = $request->file('bigimage');
        $img_name = rand(). time().$img->getClientOriginalName();
        $img->move(public_path('uploads/about'), $img_name);

        $img = $request->file('simage');
        $img_name2 = rand(). time().$img->getClientOriginalName();
        $img->move(public_path('uploads/about'), $img_name2);

        $img = $request->file('simage1');
        $img_name3 = rand(). time().$img->getClientOriginalName();
        $img->move(public_path('uploads/about'), $img_name3);

                About::create([

                    'bigtitle_en'=>$request->bigtitle_en,
                    'bigtitle_ar'=>$request->bigtitle_ar,
                    'bigcontent_en'=>$request->bigcontent_en,
                    'bigcontent_ar'=>$request->bigcontent_ar,
                    'stitle_en'=>$request->stitle_en,
                    'stitle_ar'=>$request->stitle_ar,
                    'stitle_en1'=>$request->stitle_en1,
                    'stitle_ar1'=>$request->stitle_ar1,

                    'scontent_en'=>$request->scontent_en,
                    'scontent_ar'=>$request->scontent_ar,
                    'scontent_en1'=>$request->scontent_en1,
                    'scontent_ar1'=>$request->scontent_ar1,
                    'bigimage' => $img_name,
                    'simage' => $img_name2,
                    'simage1' => $img_name3,
                ]);
                return redirect()->route('admin.about.index')->with('msg','About added successfully')->with('type', 'success');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)

    {
            $about =About::findOrFail($id);
        File::delete(public_path('uploads/about/'.$about->image));
        $about->delete();
        return redirect()->route('admin.about.index')->with('msg', 'about deleted successfully')->with('type', 'danger');

    }
}
