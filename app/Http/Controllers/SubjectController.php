<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function saveSubject(Request $request) {
        echo json_encode($request->all());
        $newSubject = new Subject();
        $newSubject->title = $request->title;
        $newSubject->description = $request->description;
        $newSubject->price = $request->price;
        $newSubject->hours = $request->hours;
        $newSubject->save();
        return redirect('mainpage')->with('save','Success')->withErrors('error','Failed');
    }

    public function mainpage() {
       if (Auth::check()) {
        return view('mainpage', ['subjects' => Subject::all()]);
       }
       return redirect('login')->withSuccess('You do not have access');
    }
}
