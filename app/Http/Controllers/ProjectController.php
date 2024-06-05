<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\ProjectModel;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = ProjectModel::all();
        $perPage = 6;
        $currentPage = request()->query('page', 1);
        $paginatedProjects = new LengthAwarePaginator(
            $projects->forPage($currentPage, $perPage),
            $projects->count(),
            $perPage,
            $currentPage,
            ['path' => route('projects')]
        );
        $data = [
            "data" => $paginatedProjects,
            'main_page' => 'Projects',
        ];
        return view('projects', $data);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,gif',
            'category' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()
                ->route('projects')
                ->withErrors($validator)
                ->withInput();
        }
        $data = $validator->validated();

        $thumbnailPath = $request->file('thumbnail')->store('projects', 'public');
        $project = new ProjectModel;
        $project->title = $data['title'];
        $project->description = $data['description'];
        $project->link = $data['url'];
        $project->price = $data['price'];
        $project->category = $data['category'];
        $project->thumbnail = $thumbnailPath;
        if ($project->save()) {
            return redirect()->route('projects')->with('success', 'Successfully Created.');
        } else {
            return redirect()->route('projects')->with('error', 'Something Went Wrong');
        }
    }
    public function get_project_by_id(Request $request)
    {
        $project = ProjectModel::find($request->id);
        return json_encode($project);
    }
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'update_id' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
            'category' => 'required',
            // Add 'url' and 'price' as nullable fields if you need to validate them
            // 'url' => 'nullable',
            // 'price' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('projects')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $validator->validated();
        $project = ProjectModel::find($request->post('update_id'));

        if (!$project) {
            return redirect()->route('projects')->with('error', 'Project not found.');
        }

        // Store the thumbnail if a file is provided
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('projects', 'public');
            $project->thumbnail = $thumbnailPath;
        }

        // Update the fields
        $project->title = $data['title'];
        $project->description = $data['description'];
        $project->category = $data['category'];
        $project->link = $request->input('url', null);
        $project->price = $request->input('price', null);

        if ($project->save()) {
            return redirect()->route('projects')->with('success', 'Project updated successfully.');
        } else {
            return redirect()->route('projects')->with('error', 'Project update failed.');
        }
    }




    public function destroy(Request $request)
    {
        $project = ProjectModel::find($request->get('id'));
        if (!$project) {
            session()->flash('error', 'Somthing Went Wrong.');
            echo json_encode(array('status' => false, 'message' => ''));
        }
        if ($project->delete()) {
            session()->flash('success', 'Successfully Deleted');
            echo json_encode(array('status' => true));
        } else {
            session()->flash('error', 'Failed to delete.');
            echo json_encode(array('status' => false));
        }
    }
}
