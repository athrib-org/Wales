<?php

namespace App\Http\Controllers;

use App\Models\ProjectManager;
use App\Http\Requests\StoreProjectManagerRequest;
use App\Http\Requests\UpdateProjectManagerRequest;

class ProjectManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectManagerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectManagerRequest $request)
    {
        $data = $request->validated();

        ProjectManager::create([
            'name' => $data['name']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectManager  $projectManager
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectManager $projectManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectManager  $projectManager
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectManager $projectManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectManagerRequest  $request
     * @param  \App\Models\ProjectManager  $projectManager
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectManagerRequest $request, ProjectManager $projectManager)
    {
        $data = $request->validated();

        $projectManager->update([
            'name' => $data['name'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectManager  $projectManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectManager $projectManager)
    {
        $projectManager->delete();
    }
}
