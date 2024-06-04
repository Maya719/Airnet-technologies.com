<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{

    public function index(){
        $members = TeamMember::all();
        $data = [
            'main_page' => 'Team Members',
            "data"=> $members,
        ];   
        return view('team', $data);
    }
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'designation' => 'required',
            'image' => 'required|image|mimes:jpeg,png,gif',
        ]);

        if ($validator->fails()) {
            return redirect()->route('team')->with('error', 'All Data Needed.');
        }
        $data = $validator->validated();
        // $memberImage = $request->file('image')->store('member', 'public');
        $destinationPath = public_path('assets/img/member');
        $image = $request->file('image');
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $path =  'assets/img/member/'.$filename;
        if($image->move($destinationPath, $filename)){
            $member = new TeamMember;
            $member->name = $data['name'];
            $member->designation = $data['designation'];
            $member->image = $path; 
            if($member->save()){
                return redirect()->route('team')->with('success', 'Successfully Created.');
            }else{
                return redirect()->route('team')->with('error', 'Something Went Wrong');
            }
        }else{
            return redirect()->route('team')->with('error', 'Image Failed To Save');
        }
        
    }
    
    public function destroy(Request $request){
        $member = TeamMember::find($request->get('id')); 
        if (!$member) {
            session()->flash('error', 'Somthing Went Wrong.');
            echo json_encode(array('status'=> false,'message'=>''));
        }
        if($member->delete()){
            session()->flash('success', 'Successfully Deleted');
            echo json_encode(array('status'=> true ));
        }else{
            session()->flash('error', 'Failed to delete.');
            echo json_encode(array('status'=> false ));
        }
    }
    public function get_member_by_id(Request $request){
        $member = TeamMember::find($request->get('id')); 
        echo json_encode($member);
    }

    public function update(Request $request)
{
    $validator = Validator::make($request->all(), [
        'update_id' => 'required',
        'name' => 'required|max:255',
        'designation' => 'required',
        'image' => 'required|image|mimes:jpeg,png,gif',
    ]);

    if ($validator->fails()) {
        return redirect()->route('team')->with('error', 'All Data Needed.');
    }

    $updateId = $request->input('update_id');

    if (!$request->filled('update_id')) {
        return redirect()->route('team')->with('error', 'Invalid request.');
    }

    try {
        $member = TeamMember::findOrFail($updateId);
    } catch (ModelNotFoundException $e) {
        return redirect()->route('team')->with('error', 'Team member not found.');
    }

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $path = 'assets/img/member/' . $filename;

        // Move the uploaded image to the designated folder
        $destinationPath = public_path('assets/img/member');
        if (!$image->move($destinationPath, $filename)) {
            return redirect()->route('team')->with('error', 'Image failed to save.');
        }

        // Update the member's image path
        $member->image = $path;
    }

    // Update other fields
    $member->name = $request->input('name');
    $member->designation = $request->input('designation');

    // Save the updated member
    if ($member->save()) {
        return redirect()->route('team')->with('success', 'Updated successfully.');
    } else {
        return redirect()->route('team')->with('error', 'Update failed.');
    }
}
  
  
  public function downloadFile(Request $request)
    {
    $filename = "archive.zip";
    return $filename;
        $filePath = storage_path('app/public/' . $filename);

        if (!Storage::exists($filePath)) {
            abort(404);
        }

        return response()->download($filePath, $filename);
    }
  
}
