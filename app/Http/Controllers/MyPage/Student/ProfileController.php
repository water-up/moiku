<?php

namespace App\Http\Controllers\MyPage\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Secondaty_category;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $student = Student::find(\Auth::user()->id);
        $categories = Student::find(\Auth::user()->id)->secondary_categories()->get();
        
        return view('mypage/profile')
        ->with(['user' => $student])
        ->with(['categories' => $categories]);
    }
    
    public function showEditProfile()
    {
        $student = Student::find(\Auth::user()->id);
        $categories = Student::find(\Auth::user()->id)->secondary_categories()->get();
        
        return view('mypage/edit_profile')
        ->with(['user' => $student])
        ->with(['categories' => $categories]);
    }
    
    public function editProfile(Request $request)
    {
        /*
        $student = Student::find(\Auth::user()->id);
        $student->icon = $request->icon;
        $student->name = $request->name;
        $student->introducation = $request->introducation;
        
        $student->save();
        */
        
        $student = Student::find(\Auth::user()->id);
        $student->fill($request->all())->save();
        
        return redirect('/mypage/student/profile');
    }
}
