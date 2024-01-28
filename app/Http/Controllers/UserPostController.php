<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon; 

class UserPostController extends Controller
{
            public function store(Request $request)
        {
            $post = UserPost::create([
                'title' => $request->input_title,
                'description' => $request->description,
                'user_id' => Auth::user()->id,
            ]);

            // Flash success message to the session
            return redirect()->back()->with('success', 'Publish successfully in the database.');
        }

        public function update(Request $request)
        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
            ]);
        
            $update_data = UserPost::find($request->id);
            
            if (!$update_data) {
                // Handle the case where the UserPost with the given ID is not found
                return redirect()->back()->with('error', 'User post not found.');
            }
        
            $update_data->title = $request->title;
            $update_data->description = $request->description;
            $update_data->updated_at =Carbon::now();
            $update_data->save();
        
            return redirect()->back()->with('success', 'User post update successfully in the database.');
        }

        
        public function destroy($id)
            {
                $userPost = UserPost::find($id);

                if (!$userPost) {
                   
                    return redirect()->back()->with('error', 'User post not found.');
                }

                $userPost->delete();

                return redirect()->back()->with('success', ' deleted successfully.');
            }
}
