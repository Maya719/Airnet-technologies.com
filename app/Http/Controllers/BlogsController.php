<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;
class BlogsController extends Controller
{
    public function index(){
        $blogs = Blogs::all();
        $perPage = 6;
        $currentPage = request()->query('page', 1);
            $paginatedblogs = new LengthAwarePaginator(
                $blogs->forPage($currentPage, $perPage),
                $blogs->count(),
                $perPage,
                $currentPage,
                ['path' => route('blogs')]
            );
        $data = [
            'main_page' => 'Blogs',
            "data"=> $paginatedblogs,
        ];   
        return view('blogs', $data);
    }
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'blog_text' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,gif',
        ]);

        if ($validator->fails()) {
            return redirect()->route('blogs')->with('error', 'All Data Needed.');
        }
        $data = $validator->validated();
        $destinationPath = public_path('assets/img/blogs');
        $image = $request->file('thumbnail');
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $path =  'assets/img/blogs/'.$filename;
        if($image->move($destinationPath, $filename)){
            $blog = new Blogs;
            $blog->title = $data['title'];
            $blog->description = $data['blog_text'];
            $blog->image = $path; 
            if($blog->save()){
                return redirect()->route('blogs')->with('success', 'Successfully Created.');
            }else{
                return redirect()->route('blogs')->with('error', 'Something Went Wrong');
            }
        }else{
            return redirect()->route('blogs')->with('error', 'Image Failed To Save');
        }
        
    }
    public function destroy(Request $request){
        $blog = Blogs::find($request->get('id')); 
        if (!$blog) {
            session()->flash('error', 'Somthing Went Wrong.');
            echo json_encode(array('status'=> false,'message'=>''));
        }
        if($blog->delete()){
            session()->flash('success', 'Successfully Deleted');
            echo json_encode(array('status'=> true ));
        }else{
            session()->flash('error', 'Failed to delete.');
            echo json_encode(array('status'=> false ));
        }
    }
    public function get_blog_by_id(Request $request){
        $Blogs = Blogs::find($request->get('id')); 
        echo json_encode($Blogs);
    }
    public function update(Request $request){
        
    $validator = Validator::make($request->all(), [
        'update_id' => 'required',
        'title' => 'required|max:255',
        'blog_text2' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->route('blogs')->with('error', 'All Data Needed.');
    }

    $updateId = $request->input('update_id');

    if (!$request->filled('update_id')) {
        return redirect()->route('blogs')->with('error', 'Invalid request.');
    }
    
    try {
        $blog = Blogs::findOrFail($updateId);
    } catch (ModelNotFoundException $e) {
        return redirect()->route('blogs')->with('error', 'Blog not found.');
    }
    if ($request->hasFile('thumbnail')) {
        $image = $request->file('thumbnail');
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $path = 'assets/img/blogs/' . $filename;

        // Move the uploaded image to the designated folder
        $destinationPath = public_path('assets/img/blogs');
        if (!$image->move($destinationPath, $filename)) {
            return redirect()->route('blogs')->with('error', 'Image failed to save.');
        }
        $blog->image = $path;
    }
     // Update other fields
     $blog->title = $request->input('title');
     $blog->description = $request->input('blog_text2');
 
     // Save the updated blog
     if ($blog->save()) {
         return redirect()->route('blogs')->with('success', 'Updated successfully.');
     } else {
         return redirect()->route('blogs')->with('error', 'Update failed.');
     }
    }
    public function blog_detail($id){
        $blog = Blogs::findOrFail($id);
        $data = [
            'main_page' => 'Blogs Detail',
            "data"=> $blog,
        ];   
        return view('blog_detail', $data);
    }
}
