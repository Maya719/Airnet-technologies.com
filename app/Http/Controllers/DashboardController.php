<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Blogs_Table;
use App\Models\candidate_data;
use App\Models\Jobs;
use App\Models\privacy_policy;
use App\Models\RefundPolicy;
use App\Models\Setting;
use App\Models\TeamMember;
use App\Models\TermsConditions;
use Illuminate\Http\Request;



class DashboardController extends Controller
{
    public function index()
    {
        $blogs = Blogs::all()->count();
        $members = TeamMember::all()->count();
        $teammembers = TeamMember::all();
        $data = [];

        $data = [
            'blogs' => $blogs,
            'members' => $members,
            'team' => $teammembers,
            'main_page' => 'Dashboard'
        ];
        return view('dashboard', $data);
    }

    public function show()
    {
        $data = [
            'main_page' => 'Change Logos'
        ];
        return view('change_logo', $data);
    }
    public function save_logo(Request $request)
    {
        $file = $request->file('logo');
        $favicon = $request->file('favicon');

        $type = 'logo';
        $existingSettings = Setting::where('type', $type)->first();
        $existingSettings = json_decode($existingSettings->value, true); // Decode the 'value' property
        $logo_name = $existingSettings['logo'] ?? null;
        $favicon_name = $existingSettings['favicon'] ?? null;

        if ($file) {
            $originalFileName = $file->getClientOriginalName();
            $filenameWithoutSpaces = str_replace(' ', '_', $originalFileName);
            $uniqueFileName = time() . '_' . $filenameWithoutSpaces;
            $path = 'assets/images/logos/';
            $file->move($path, $uniqueFileName);
            $logo_name = $path . $uniqueFileName;
        }
        if ($favicon) {
            $originalFileName = $favicon->getClientOriginalName();
            $filenameWithoutSpaces = str_replace(' ', '_', $originalFileName);
            $uniqueFileName = time() . '_' . $filenameWithoutSpaces;
            $path = 'assets/images/logos/';
            $favicon->move($path, $uniqueFileName);
            $favicon_name = $path . $uniqueFileName;
        }

        Setting::where('type', $type)->update([
            'value' => json_encode([
                'logo' => $logo_name,
                'favicon' => $favicon_name
            ])
        ]);
        return redirect()->route('change_logo')->with('success', 'Updated successfully.');
    }


    public function privacy_policy(Request $request)
    {
        // dashboard privacy_policy

        $lastEnglishPolicy = privacy_policy::where('language', 'english')->latest()->first();
        $lastArabicPolicy = privacy_policy::where('language', 'arabic')->latest()->first();

        $selectedLanguage = $request->input('language', 'english');

        $lastSavedPolicy = ($selectedLanguage == 'arabic') ? $lastArabicPolicy : $lastEnglishPolicy;

        return view('privacy_policy', [
            'main_page' => "Payments",
            'selected_language' => $selectedLanguage,
            'last_saved_policy' => $lastSavedPolicy ? $lastSavedPolicy->policy : '',
        ]);
    }
    public function save_privacy_policy(Request $request)
    {
        // dashboard privacy_policy

        $validatedData = $request->validate([
            'language' => 'required',
            'policy' => 'required',
        ]);

        try {

            $privacyPolicy = privacy_policy::updateOrCreate(
                ['language' => $validatedData['language']],
                ['policy' => $validatedData['policy']]
            );

            if ($privacyPolicy) {
                return redirect()->back()->with('success', 'Privacy policy saved successfully.');
            } else {
                return redirect()->back()->with('error', 'Failed to save privacy policy. Please try again.');
            }
        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Failed to save privacy policy. Please try again.');
        }
    }


    public function refund_policy(Request $request)
    {

        $lastEnglishPolicy = RefundPolicy::where('language', 'english')->latest()->first();
        $lastArabicPolicy = RefundPolicy::where('language', 'arabic')->latest()->first();

        $selectedLanguage = $request->input('language', 'english');

        $lastSavedPolicy = ($selectedLanguage == 'arabic') ? $lastArabicPolicy : $lastEnglishPolicy;

        return view('refund_policy', [
            'main_page' => "Payments",
            'selected_language' => $selectedLanguage,
            'last_saved_policy' => $lastSavedPolicy ? $lastSavedPolicy->policy : '',
        ]);


    }

    public function save_refund_policy(Request $request)
    {

        // dashboard save_refund_policy

        $validatedData = $request->validate([
            'language' => 'required',
            'refund_policy' => 'required',
        ]);


        try {

            $refund_policy = RefundPolicy::updateOrCreate(
                ['language' => $validatedData['language']],
                ['refund_policy' => $validatedData['refund_policy']]
            );


            if ($refund_policy) {
                return redirect()->back()->with('success', 'Refund Policy saved successfully.');
            } else {
                return redirect()->back()->with('error', 'Failed to save Refund Policy. Please try again.');
            }
        } catch (\Exception $e) {


            dd($e->getMessage());
            return redirect()->back()->with('error', 'Failed to save Refund Policy. Please try again.');
        }
    }


    public function terms_conditions(Request $request)
    {
        // dashboard terms_conditions

        $lastEnglishPolicy = TermsConditions::where('language', 'english')->latest()->first();
        $lastArabicPolicy = TermsConditions::where('language', 'arabic')->latest()->first();

        $selectedLanguage = $request->input('language', 'english');

        $lastSavedPolicy = ($selectedLanguage == 'arabic') ? $lastArabicPolicy : $lastEnglishPolicy;

        return view('terms_conditions', [
            'main_page' => "Payments",
            'selected_language' => $selectedLanguage,
            'last_saved_policy' => $lastSavedPolicy ? $lastSavedPolicy->policy : '',
        ]);
    }

    public function save_terms_conditions(Request $request)
    {
        // dashboard save_terms_conditions

        $validatedData = $request->validate([
            'language' => 'required',
            'terms_conditions' => 'required',
        ]);


        try {

            $terms_conditions = TermsConditions::updateOrCreate(
                ['language' => $validatedData['language']],
                ['terms_conditions' => $validatedData['terms_conditions']]
            );


            if ($terms_conditions) {
                return redirect()->back()->with('success', 'Terms & Conditions saved successfully.');
            } else {
                return redirect()->back()->with('error', 'Failed to save Terms & Conditions. Please try again.');
            }
        } catch (\Exception $e) {


            dd($e->getMessage());
            return redirect()->back()->with('error', 'Failed to save Terms & Conditions. Please try again.');
        }
    }
}
