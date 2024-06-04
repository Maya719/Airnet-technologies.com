<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use App\Models\ProjectModel;



class Main_Controller extends Controller
{
    public function index()
    {

        try {
            $blogs = Blogs::all();
            $more_blogs =  $blogs->toArray();
        } catch (\Throwable $th) {
            dd('Error in connecting with Database. Try again to connect with Database', $th->getMessage());
        }


        try {
            $team = TeamMember::all();
            $team_member =  $team->toArray();
        } catch (\Throwable $th) {
            dd('Error in connecting with Database. Try again to connect with Database', $th->getMessage());
        }
      
       try {
            $projects = ProjectModel::all();
            $more_projects =  $projects->toArray();

        } catch (\Throwable $th) {
            dd('Error in connecting with Database. Try again to connect with Database', $th->getMessage());
        }

        $mailFromAddress = env('MAIL_FROM_ADDRESS');

        $limited_blogs = array_slice($more_blogs, 0, 3);
        $limited_team_members = array_slice($team_member, 0, 3);
		//$all_projects = array_slice($more_projects, 0, 3);
        $all_projects = $more_projects;
      
        return view("index", compact('limited_blogs', 'limited_team_members', 'mailFromAddress','all_projects'));
    }

    function load_blog_description($blog_id)
    {

        $more_blogs = Blogs::all();

        $selected_blog = collect($more_blogs)->firstWhere('id', $blog_id);


        if ($selected_blog) {

            return view("blog_description", compact('selected_blog'));
        } else {

            abort(404);
        }
    }
}
