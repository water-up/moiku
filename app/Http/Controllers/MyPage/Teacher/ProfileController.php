<?php

namespace App\Http\Controllers\MyPage\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class ProfileController extends Controller
{
    public function showProfile(Student $student)
    {
        return view('mypage/profile')
        ->with(['student' => $student]);
    }
}
