@extends('Layouts.mainLayouts')
@section('title','Leave Type')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success  " role="alert">
   {{session()->get('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
</div>
@endif

<h3 class="text-center mt-3">Add Leave Type</h3>
<form id="leaveTypeForm" action="{{route('addLeaveType')}}" method="post">
    @csrf
    <div class="text-center mt-3">
            <input type="text" id="textInput"  name="name" placeholder="enter leave type" id="name" style="margin-right:30px">
            <button id="addLeaveTypeBtn" type="submit" class="btn btn-primary ">Add Leave Type</button>
    </div>
</form>
<div class="container mt-4">
        <h4>Leave Type List</h4>
        <table class="table table-striped">
            <thead>
                <tr class="tableHeader">
                    <th style="color:#fff">#</th>
                    <th style="color:#fff">Name</th>
                    <th style="color:#fff">Created By</th>
                    <th style="color:#fff">Status</th>
                    <th style="color:#fff">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="color:#fff">1</td>
                    <td style="color:#fff">John Doe</td>
                    <td style="color:#fff">johndoe@example.com</td>
                    <td >
                        <button type="button" class="btn bg-success">Active</button>
                    </td>
                    <td><a href="" class="btn btn-danger">
                              <i class="fas fa-trash"></i>
                         </a>
                    </td>
                </tr>
                <tr>
                    <td style="color:#fff">1</td>
                    <td style="color:#fff">John Doe</td>
                    <td style="color:#fff">johndoe@example.com</td>
                    <td >
                        <p class="btn btn-danger">Inactive</p>
                    </td>
                    <td><a href="" class="btn btn-danger">
                              <i class="fas fa-trash"></i>
                         </a>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
    
@endsection