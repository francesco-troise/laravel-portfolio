<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all()->makeHidden(['id', 'created_at', 'updated_at']);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return(view('admin.form.add_project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->all();

        $new_project = new Project();
        $new_project -> title = $data['title'];
        $new_project -> description = $data['description'];
        $new_project -> version = $data['version'];
        $new_project -> status = $data['status'];

        $new_project->save();

        return redirect()->route('projects.show', $new_project);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.form.modify_project', compact('project'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
       $data = $request->all();


       $project->title = $data['title'];
       $project->description = $data['description'];
       $project->version = $data['version'];
       $project->status = $data['status'];

       $project->update();

       return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
