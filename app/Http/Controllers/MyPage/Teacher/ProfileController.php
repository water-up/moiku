<?php

namespace App\Http\Controllers\MyPage\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Secondaty_category;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $teacher = Teacher::find(\Auth::user()->id);
        $categories = Teacher::find(\Auth::user()->id)->secondary_categories()->get();
        
        return view('mypage/profile')
        ->with(['user' => $teacher])
        ->with(['categories' => $categories]);
    }
    
    public function showEditProfile()
    {
        $teacher = Teacher::find(\Auth::user()->id);
        $categories = Teacher::find(\Auth::user()->id)->secondary_categories()->get();
        
        return view('mypage/edit_profile')
        ->with(['user' => $teacher])
        ->with(['categories' => $categories]);
    }
    
    public function editProfile(Request $request,)
    {
        /*
        $teacher = Teacher::find(\Auth::user()->id);
        $teacher->icon = $request->icon;
        $teacher->name = $request->name;
        $teacher->introducation = $request->introducation;
        
        $teacher->save();
        */
        
        $teacher = Teacher::find(\Auth::user()->id);
        $teacher->fill($request->all())->save();
        
        return redirect('/mypage/teacher/profile');
    }
}
