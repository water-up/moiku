<?php

namespace App\Http\Controllers\MyPage\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class ProfileController extends Controller
{
    public function showProfile(Student $student)
    {
        return view('mypage/student/profile')
        ->with(['student' => $student]);
    }
}
