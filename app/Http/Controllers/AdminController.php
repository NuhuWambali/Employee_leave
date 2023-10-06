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

    public function leaveType(LeaveType $getLeaveType){
        $getLeaveTypes=LeaveType::paginate(3);
        return view('admin.leaveType',compact('getLeaveTypes'));
    }

    public function addLeaveType(Request $request){
         $AuthenticatedUser=Auth::user();
         $addLeaveType=new LeaveType;
         $addLeaveType->name=$request->name;
         $addLeaveType->created_by=$AuthenticatedUser->name;
         $addLeaveType->save();
        return to_route('leaveType')->with('message','Leave Type Added Successfully');
    }

    public function getAllUsers(User $users){
        $allUsers=User::all();
        return view('admin.users',compact('allUsers'));
    }
    public function activateUser($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->status='active';
        $user->save();
        return redirect()->back()->with('success', 'User has been activated successfully.');

    }
    public function deactivateUser($id,Request $request)
    {
        $user = User::findOrFail($id);
        $user->status='inactive';
        $user->save();
        return redirect()->back()->with('success', 'User has been deactivated successfully.');

    }


}
//if ($user->status === 'active') {
//            return redirect()->back()->with('error', 'User is already active.');
//        }
//        $user->update(['status' => 'active']);
