<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project=Project::all();
        return view('admin.Projects.index',compact('project'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project=new Project();
        return view('admin.Projects.create',compact('project'));
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
            'link'=>'required',
        ]);
                
                $img = $request->file('image_a');
                $img_name = rand(). time().$img->getClientOriginalName();
                $img->move(public_path('uploads/project'), $img_name);

                $img = $request->file('image_b');
                $img_name2 = rand(). time().$img->getClientOriginalName();
                $img->move(public_path('uploads/project'), $img_name2);

                $img = $request->file('image_c');
                $img_name3 = rand(). time().$img->getClientOriginalName();
                $img->move(public_path('uploads/project'), $img_name3);

                $img = $request->file('image_d');
                $img_name4 = rand(). time().$img->getClientOriginalName();
                $img->move(public_path('uploads/project'), $img_name4);

                Project::create([
                    'link'=>$request->link,
                    'name_en'=>$request->name_en,
                    'name_ar'=>$request->name_ar,
                    'content_en'=>$request->content_en,
                    'content_ar'=>$request->content_ar,
                    'image_a' => $img_name,
                    'image_b' => $img_name,
                    'image_c' => $img_name,
                    'image_d' => $img_name,
                    
                ]);
                return redirect()->route('admin.project.index')->with('msg','Projects added successfully')->with('type', 'success');
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
        $project =Project::findOrFail($id);
        File::delete(public_path('uploads/project/'.$project->image));
        $project->delete();
         return redirect()->route('admin.project.index')->with('msg', 'project deleted successfully')->with('type', 'danger');


    }
}
