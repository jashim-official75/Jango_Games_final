<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    //---index--
    public function index()
    {
        $users = User::paginate(10);
        return view('backend.user.index', compact('users'));
    }

    //---destroy
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $old_image = $user->image;
            $oldPath ='uploads/Admin/'.$old_image;
            if($oldPath){
                File::delete(public_path($oldPath));
            }
        $user->delete();
        return redirect()->route('user.index')->with('message', 'User Deleted Successfully ! ');
    }
}
