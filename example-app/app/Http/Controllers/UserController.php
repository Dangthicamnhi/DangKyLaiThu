<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function showAdminForm()
    {
        //if (Auth::check()) {
            $users = User::all();
            return view('admin.admin', ['users' => $users]);
        //}
        //return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function updateUser($id)
    {
        $user = User::find($id);

        return view('user.update', ['user' => $user]);
    }

    public function postUpdateUser($id, Request $request)
    {
        try {
            $input = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'phone' => 'required|min:10',
                'role' => 'required',
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                
                
            ]);
    
            $user = User::findOrFail($id);

            $user->name = $input['name'];
            $user->email = $input['email'];
            $user->phone = $input['phone'];
            $user->role = $input['role'];
            $user->avata = $input['avatar'];
            
    
             // Check if a new image is uploaded
             if ($request->hasFile('avatar')) {
                // Handle image upload
                $image = $request->file('avatar');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('avatar'), $imageName); 
                // Save the image to public/img
                // Update the product's image
                $user->avatar = $imageName;
            }

            
            $user->save();
    
            // Save the updated user
    
            return redirect()->to('list')->with('success', 'User upload deleted !');
        } catch (Exception $ex) {
            return redirect()->to('list')->with('failed', 'Failed to update user !');
        }
    }

    public function deleteUser($id)
    {
        $user = User::destroy($id);

        return redirect()->intended('list')
            ->withSuccess('Signed in');
    }


}

