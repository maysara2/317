<?php

namespace App\Http\Controllers;

use App\Models\Service2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class Service2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service2=Service2::all();
        return view('admin.Services2.index',compact('service2'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service2=new Service2();
        return view('admin.Services2.create',compact('service2'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'title_en'=>'required',
            'title_ar'=>'required',
            'content_en'=>'required',
            'content_ar'=>'required',
        ]);

                $img = $request->file('image');
                $img_name = rand(). time().$img->getClientOriginalName();
                $img->move(public_path('uploads/service2'), $img_name);

                Service2::create([

                    'title_en'=>$request->title_en,
                    'title_ar'=>$request->title_ar,
                    'content_en'=>$request->content_en,
                    'content_ar'=>$request->content_ar,
                    'image' => $img_name,
                ]);
                return redirect()->route('admin.service2.index')->with('msg','Services2 added successfully')->with('type', 'success');
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
        $service2 =Service2::findOrFail($id);
        File::delete(public_path('uploads/service2/'.$service2->image));
        $service2->delete();
         return redirect()->route('admin.service2.index')->with('msg', 'service2 deleted successfully')->with('type', 'danger');


    }
}
