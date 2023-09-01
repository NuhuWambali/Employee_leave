<?php

namespace App\Http\Controllers;

use App\Models\LeaveType;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    //
    public function indexForAdmin(){
      
        return view('admin.home');
    }

    public function leaveType(){
        return view('admin.leaveType');
    }

    public function addLeaveType(Request $request){
         $AuthenticatedUser=Auth::user();
         $addLeaveType=new LeaveType;
         $addLeaveType->name=$request->name;
         $addLeaveType->create_by=$AuthenticatedUser->name;
         $addLeaveType->save();
        return to_route('leaveType')->with('message','Leave Type Added Successfully');
    }
}
