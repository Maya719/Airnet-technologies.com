<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\TeamMember;
use App\Models\ProjectModel;


use Illuminate\Http\Request;

class View_More_Controller extends Controller
{
    function more_team()
    {

        try {
            $team = TeamMember::all();
            $team_member =  $team->toArray();
        } catch (\Throwable $th) {
            dd('Error in connecting with Database. Try again to connect with Database', $th->getMessage());
        }

        return view("view_more_team", compact('team_member'));
    }
    function more_blogs()
    {

        try {
            $blogs = Blogs::all();
            $more_blogs =  $blogs->toArray();
        } catch (\Throwable $th) {
            dd('Error in connecting with Database. Try again to connect with Database', $th->getMessage());
        }

        return view("view_more_blogs", compact('more_blogs'));
    }

    function more_projects()
    {
        try {
            $projects = ProjectModel::all();
            $more_projects =  $projects->toArray();
        } catch (\Throwable $th) {
            dd('Error in connecting with Database. Try again to connect with Database', $th->getMessage());
        }


        return view("view_more_projects", compact('more_projects'));
    }
    function single_project($id)
    {
        $project = ProjectModel::find($id);
        if (!$project) {
            abort(404, 'Project not found');
        }

        return view('single_project', compact('project'));
    }
}
