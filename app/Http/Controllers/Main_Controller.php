<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\privacy_policy;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use App\Models\ProjectModel;
use App\Models\RefundPolicy;
use App\Models\TermsConditions;

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

    public function privacy_policy()
    {
        // Return HTML response
        return view('privacy_policy_view');
    }

    public function get_privacy_policy(Request $request)
    {
        $language = $request->query('language');

        $policy = privacy_policy::where('language', $language)->first();


        // Return HTML response
        return response()->json(['policy' => $policy ? $policy->policy : '']);
    }



    public function refund_policy(Request $request)
    {
        // frontend view
        return view('refund_policy_view');
    }
    public function get_refund_policy(Request $request)
    {
        $language = $request->query('language');

        $refund_policy = RefundPolicy::where('language', $language)->first();


        // Return HTML response
        return response()->json(['refund_policy' => $refund_policy ? $refund_policy->refund_policy : '']);
    }




    public function terms_conditions(Request $request)
    {
        // frontend view
        return view('terms_conditions_view');
    }
    public function get_terms_conditions(Request $request)
    {
        $language = $request->query('language');

        $terms_conditions = TermsConditions::where('language', $language)->first();


        // Return HTML response
        return response()->json(['terms_conditions' => $terms_conditions ? $terms_conditions->terms_conditions : '']);
    }
}
