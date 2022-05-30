<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStoreRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.list-projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create-project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectStoreRequest $request)
    {
        $cover_1 = $request->file('cover_1')->storeAs('public/cover', $request->file('cover_1')->getClientOriginalName());
        $cover_2 = $request->file('cover_2')->storeAs('public/cover', $request->file('cover_2')->getClientOriginalName());
        $cover_3 = $request->file('cover_3')->storeAs('public/cover', $request->file('cover_3')->getClientOriginalName());

        Project::create([
            'name' => $request->name,
            'category' => $request->category,
            'slug' => $request->slug,
            'url' => $request->github,
            'customer' => $request->customer,
            'description' => $request->description,
            'cover_1' => Storage::url($cover_1),
            'cover_2' => Storage::url($cover_2),
            'cover_3' => Storage::url($cover_3),
        ]);

        return redirect()->back()->with(['success' => 'El Proyecto ' . $request->name . ' Se ha guardado con exito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $slug)
    {
        $project = Project::find($id);

        return view('projects.edit-project', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        if ($request->file('cover_1') === null || $request->file('cover_2') === null || $request->file('cover_3') === null) {
            $cover_1 = $project->cover_1;
            $cover_2 = $project->cover_2;
            $cover_3 = $project->cover_3;
        } else {
            $cover_1 = Storage::url($request->file('cover_1')->storeAs('public/cover', $request->file('cover_1')->getClientOriginalName()));
            $cover_2 = Storage::url($request->file('cover_2')->storeAs('public/cover', $request->file('cover_2')->getClientOriginalName()));
            $cover_3 = Storage::url($request->file('cover_3')->storeAs('public/cover', $request->file('cover_3')->getClientOriginalName()));
        }

        $project->update([
            'name' => $request->name,
            'category' => $request->category,
            'slug' => $request->slug,
            'url' => $request->github,
            'customer' => $request->customer,
            'description' => $request->description,
            'cover_1' => $cover_1,
            'cover_2' => $cover_2,
            'cover_3' => $cover_3,
        ]);
        $project->save();

        return redirect()->back()->with(['success' => 'El Proyecto ' . $request->name . ' Se ha actualizado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
