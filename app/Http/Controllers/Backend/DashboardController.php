<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Game;
use App\Models\Backend\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $games = Game::count();
        $category = Category::count();
        return view('backend.dashboard.index',[
            'games'=>$games,
            'category'=>$category,
        ]);
    }

    //profile
    public function profile()
    {
        $profile = User::find(Auth::user()->id);
        return view('backend.profile.index', compact('profile'));
    }

    //profile_update
    public function profile_update(Request $request)
    {
        $user = User::find($request->id);
        $user->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
        ]);
        if($request->hasFile('image')){
            //old image delete----
            $old_image = $user->image;
            $oldPath ='uploads/Admin/'.$old_image;
            if($oldPath){
                File::delete(public_path($oldPath));
            }
            //new image upload
           $name = $request->file('image')->getClientOriginalName();
           $request->file('image')->move(public_path('uploads/Admin'), $name);
            $user->update(['image'=>$name]);
        }
        return back()->with('message', 'Profile Updated !!');


    }

    //password_change
    public function password_change()
    {
        $user = User::find(Auth::user()->id);
        return view('backend.profile.password_change', compact('user'));
    }

    //password_update
    public function password_update(Request $request)
    {

        $request->validate([
            'OldPassword'=>'required',
            'password'=> 'min:8',
        ]);
        if(Hash::check($request->OldPassword, Auth::user()->password)){
            return 'password mass';
            User::find($request->id)->update([
                'password'=>Hash::make($request->password)
            ]);
            return back()->with('message', 'Your Password Changed !');
        }
        else{
            return back()->with('error', 'Invalid Old Password !');
        }

    }
}
