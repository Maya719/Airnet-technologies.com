<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\privacy_policy;
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

        return view("index", compact('limited_blogs', 'limited_team_members', 'mailFromAddress', 'all_projects'));
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

    public function privacy_policy(Request $request)
    {
        // frontend (view) privacy_policy


        // $privacyPolicy = privacy_policy::first();


        // return view('privacy_policy_view', ['main_page' => "Payments", 'privacy_policy'=>$privacyPolicy]);


        //    ----------------------------

        $language = $request->input('language', 'english'); // Default to English if language not provided

        // Fetch the policy for the selected language
        $privacyPolicy = privacy_policy::where('language', $language)->first();

        $policyContent = $privacyPolicy ? $privacyPolicy->policy : '';

        // Return HTML response
        return view('privacy_policy_view', ['policyContent' => $policyContent]);
    }


    public function refund_policy(Request $request)
    {
        // frontend view

        return view('refund_policy_view');
    }

    public function terms_conditions(Request $request)
    {
        // frontend view
        return view('terms_conditions_view');
    }

}
