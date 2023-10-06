@extends('Layouts.mainLayouts')
@section('title','Leave Type')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
       <button type="button" class="close" aria-hidden="true" data-dismiss="alert">x</button>
       {{session()->get('message')}}
  </div>
@endif

<h3 class="text-center mt-3">Add Leave Type</h3>
<form id="leaveTypeForm" action="{{route('addLeaveType')}}" method="post">
    @csrf
    <div class="text-center mt-3">
            <input type="text"  name="name" placeholder="       enter leave type" id="name" style="margin-right:30px">
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
                    @foreach($getLeaveTypes as $index=>$getLeaveType )
                    <td style="color:#fff">{{$index+$getLeaveTypes->firstItem()}}</td>
                    <td style="color:#fff">{{$getLeaveType->name}}</td>
                    <td style="color:#fff">{{$getLeaveType->created_by}}</td>
                    <td >
                       <a href=""><button type="button" class="btn bg-success">{{$getLeaveType->status}}</button></a>
                    </td>
                    <td><a href="" class="btn btn-danger">
                              <i class="fas fa-trash"></i>
                         </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
            {!!$getLeaveTypes->withQueryString()->links('pagination::bootstrap-5')!!}
    </div>

@endsection
