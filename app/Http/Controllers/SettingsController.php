<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $setting=Setting::all();
        return view('admin.Settings.index',compact('setting'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setting=new Setting();
        return view('admin.Settings.create',compact('setting'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name_site'=>'required',
            'address'=>'required',
            'gmail'=>'required',
            'phone'=>'required',
            'linkedin'=>'required',
            'github'=>'required',
            'contentimage_en'=>'required',
            'contentimage_ar'=>'required',
        ]);
                $img = $request->file('image');
                $img_name = rand(). time().$img->getClientOriginalName();
                $img->move(public_path('uploads/setting'), $img_name);

                Setting::create([

                    'name_site'=>$request->name_site,
                    'address'=>$request->address,
                    'gmail'=>$request->gmail,
                    'phone'=>$request->phone,
                    'linkedin'=>$request->linkedin,
                    'github'=>$request->github,
                    'contentimage_en'=>$request->contentimage_en,
                    'contentimage_ar'=>$request->contentimage_ar,
                    'image' => $img_name,
                ]);
                return redirect()->route('admin.setting.index')->with('msg','Setting added successfully')->with('type', 'success');

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
        $setting =Setting::findOrFail($id);
        File::delete(public_path('uploads/setting/'.$setting->image));
        $setting->delete();
         return redirect()->route('admin.setting.index')->with('msg', 'setting deleted successfully')->with('type', 'danger');

    }
}
