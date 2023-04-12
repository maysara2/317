<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service=Service::all();
        return view('admin.Services.index',compact('service'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service=new Service();
        return view('admin.Services.create',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name_en'=>'required',
            'name_ar'=>'required',
            'content_en'=>'required',
            'content_ar'=>'required',
        ]);
                
                $img = $request->file('image');
                $img_name = rand(). time().$img->getClientOriginalName();
                $img->move(public_path('uploads/service'), $img_name);

                Service::create([

                    'name_en'=>$request->name_en,
                    'name_ar'=>$request->name_ar,
                    'content_en'=>$request->content_en,
                    'content_ar'=>$request->content_ar,
                    'image' => $img_name,
                ]);
                return redirect()->route('admin.service.index')->with('msg','Services added successfully')->with('type', 'success');
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
        $service =Service::findOrFail($id);
        File::delete(public_path('uploads/service/'.$service->image));
        $service->delete();
         return redirect()->route('admin.service.index')->with('msg', 'service deleted successfully')->with('type', 'danger');


    }
}
